<?php 
 error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); 
  @define ( '_template' , './templates/');
  @define ( '_source' , './sources/');
  @define ( '_lib' , './admin/lib/');
  @define ( _upload_folder , './media/upload/' );

  include_once _lib."config.php";
  include_once _lib."constant.php";
  include_once _lib."functions.php";
  include_once _lib."class.database.php";
  $d = new database($config['database']);
  $id =  addslashes($_POST['id']);
  $value =  addslashes($_POST['value']);
  $url =  addslashes($_POST['url']);
	$d->reset();
	if($value==1)
	{
		$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id'  order by id desc";
	}
	elseif($value==2)
	{
		$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id'  order by luotxem desc";
	}
	else
	{
		$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id'  order by stt asc";
	}
	
	$d->query($sql_tungdanhmuc);	
	$result_spnam=$d->result_array();	
	
	$d->reset();
	$sql_laylist="select * from #_product_list where hienthi =1 and id='$id'";
	$d->query($sql_laylist);	
	$result_laylist=$d->fetch_array();	
	
	
				
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$maxR=12;
	$maxP=5;
	$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
	$result_spnam=$paging['source'];
    
	
	$total_sp = count($result_spnam);
?>
<div id="news_wrap">
  <div class="">
    <div class="list-news clearfix">
      <?php for($i=0,$count_spnam=count($result_spnam);$i<$count_spnam;) { ?>
      <div class='row clearfix'>
      	<?php for($j=0;$j<4;$j++) { ?>
        <?php if($i==$count_spnam)
        {
        	break;
        }
        ?>
        <div class="hn-items">
          <div class="tt-mobile"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="ttn b"> <?=$result_spnam[$i]["ten_vi"]?></a> </div>
          <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="Lợi nhuận sau thuế 11 th&#225;ng tăng 9% so với c&#249;ng kỳ">
          <div class="images-news"> <img class="img-news" src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["thumb"]; else echo $result_spnam[$i]["thumb"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>" />
            <div class="date-ab"><p class="desc r"><?=$result_spnam[$i]["ten_vi"]?></p></div>
          </div>
          </a>
          <div class="text-info"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="ttn b"><?=$result_spnam[$i]["ten_vi"]?></a>
            <p class="desc r"><?=$result_spnam[$i]["ten_vi"]?></p>
            <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>" class="view-more">Xem th&#234;m</a> </div>
          <div class="clearfix"></div>
        </div>
        <?php $i++;?>
        <?php } ?>
      </div>
      <div class='clearfix'></div>
      <?php } ?>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class='pagination'>
    <?=$paging['paging']?>
  </div>
</div>