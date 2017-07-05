<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); //bo thonng bao khi cac file chua dinh nghia
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );

    if(!isset($_SESSION['lang2']))
	{
		$_SESSION['lang2']='vi';
	}
	
	$lang=$_SESSION['lang2'];	//Lấy ngỗn ngữ
	require_once _source."lang_$lang.php";	//Lấy các Hằng.

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."useronline.php";	
	
	
	include_once _lib."functions_giohang.php";
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
		
	$pid=$_REQUEST['productid'];	
	$_SESSION['size'.$pid]=$_REQUEST['spsize'];	
	$_SESSION['mau'.$pid]=$_REQUEST['spmau'];	
	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
	addtocart($pid,$q);
	redirect("http://$config_url/gio-hang.html");
	}
	
?>
<!DOCTYPE html>
<html class="js postmessage cssanimations csstransforms csstransforms3d csstransitions localstorage desktop landscape" lang="en"><head>
<base href="http://<?=$config_url?>/"  />
    <title><?=$title_bar?><?=$row_setting["title_$lang"]?></title>
    <meta name="title" content="<?=$row_setting["title_$lang"]?>">
    <meta name="description" content="<?=$row_setting['description']?>">
    <meta name="keywords" content="<?=$row_setting['keywords']?>">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="copyright" content="Công ty Cổ phần Bán lẻ Kỹ thuật số ">
    <meta name="author" content="<?=$row_setting["ten_vi"]?>">
    <meta http-equiv="audience" content="General">
    <meta name="resource-type" content="Document">
    <meta name="distribution" content="Global">
    <meta name="GENERATOR" content="<?=$row_setting["ten_vi"]?> ">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta property="og:site_name" content=" ">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="vi_VN">
    <?php include _template."layout/top.php"; ?>
   <script language="javascript" type="text/javascript">
	function addtocart(pid){
		
		document.formtruong.productid.value=pid;
		document.formtruong.command.value='add';
		document.formtruong.submit();
	}
</script>


<form name="formtruong" action="index.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
</head>


<body  <?php if(@$_GET['com']=='lien-he') echo 'onLoad="initialize()"'; ?>>

    <div class="wrapper page-news">    
     
    <?php include _template."layout/header.php"; ?>
    <?php include _template.$template."_tpl.php"; ?> 
    <?php include _template."layout/footer.php"; ?>
  
    </div>  
    
<?php include _template."layout/bottom.php"; ?>    
</body>
</html>