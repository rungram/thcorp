<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

switch($act){
	case "man_photo":
		get_photos();
		$template = "thuvienanhcapcha/photos";
		break;
	case "add_photo":
		get_photos2();		
		$template = "thuvienanhcapcha/photo_add";
		break;
	case "edit_photo":
		get_photo();
		$template = "thuvienanhcapcha/photo_edit";
		break;
	case "save_photo":
		save_photo();
		break;
	case "delete_photo":
		delete_photo();
		break;			
	default:
		$template = "index";
}

function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_photos(){
	global $d, $items, $paging;
	$d->setTable('thuvienanhcapcha');
	$d->setOrder('stt,id asc');
	$d->select('*');
	$d->query();
	$items = $d->result_array();
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=thuvienanhcapcha&act=man_photo";
	$maxR=10;
	$maxP=4;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];

}
function get_photos2(){
	global $d, $items, $paging;
	
	$d->setTable('thuvienanhcapcha');
	$d->setOrder('stt,id desc');
	$d->select('*');
	$d->query();
	$items = $d->result_array();
	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=thuvienanhcapcha&act=man_photo";
	$maxR=10;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];

}

function get_photo(){
	global $d, $item, $list_cat;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
	transfer("Không nhận được dữ liệu", "index.php?com=thuvienanhcapcha&act=man_photo");
	$d->setTable('thuvienanhcapcha');
	$d->setWhere('id', $id);
	$d->select();
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=thuvienanhcapcha&act=man_photo");
	$item = $d->fetch_array();	
}

function save_photo(){
	global $d;
	$file_name=fns_Rand_digit(0,9,15);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=thuvienanhcapcha&act=man_photo");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	if($id){
			$data['stt'] = $_POST['stt'];
			$data['link'] = $_POST['link'];	
			$data['thumb'] = $_POST['thumb'];	
			$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;
			$d->reset();
			$d->setTable('thuvienanhcapcha');
			$d->setWhere('id', $id);
			if(!$d->update($data)) transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=thuvienanhcapcha&act=man_photo");
			redirect("index.php?com=thuvienanhcapcha&act=man_photo");
			
	}
	else{					
					$data['stt'] = $_POST['stt'];
				    $data['thumb'] = $_POST['thumb'];	
					$data['link'] = $_POST['link'];											
					$data['hienthi'] = isset($_POST['hienthi']) ? 1 : 0;																	
					$d->setTable('thuvienanhcapcha');
					if(!$d->insert($data)) transfer("Lưu dữ liệu bị lỗi", "index.php?com=thuvienanhcapcha&act=man_photo");
			redirect("index.php?com=thuvienanhcapcha&act=man_photo");
	}
}

function delete_photo(){
	global $d;
	if(isset($_GET['id'])){
		$id =  themdau($_GET['id']);
		$d->setTable('thuvienanhcapcha');
		$d->setWhere('id', $id);
		$d->select();
		if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=thuvienanhcapcha&act=man_photo");
		$row = $d->fetch_array();
		delete_file(_upload_thuvienanhcapcha.$row['photo']);
		delete_file(_upload_thuvienanhcapcha.$row['thumb']);
		if($d->delete())
			redirect("index.php?com=thuvienanhcapcha&act=man_photo");
		else
			transfer("Xóa dữ liệu bị lỗi", "index.php?com=thuvienanhcapcha&act=man_photo");
	}else transfer("Không nhận được dữ liệu", "index.php?com=thuvienanhcapcha&act=man_photo");
}

#====================================
function get_list_cat($id=0){
	global $d, $list_cat;
	
	$sql = "select * from #_tours order by id desc";
	$d->query($sql);
	$cats = $d->result_array();
	
	$list_cat = '<select name="id_item" class="input">';
	for($i=0, $count=count($cats); $i<$count; $i++)
		$list_cat .= '<option value="'.$cats[$i]['id'].'" '.(($cats[$i]['id']==$id)?'selected="selected"':'').'>'.$cats[$i]['tieude'].'</option>';
	$list_cat .= '</select>';
}


?>

	
