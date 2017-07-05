<?php 
	//$page = $_REQUEST["page"];
	$page = (isset($_REQUEST["page"])) ? $_REQUEST["page"]:"home";
	//echo ($page);
	switch ($page) 
	{
		case "1":
			require_once('change_language.php'); 
			break;			
			
		case "2":
			require_once('gioithieu.php'); 
			break;
			
		case "3":
			if (empty($_REQUEST["id"]))
				require_once('tintuc.php'); 
			else
				require_once('tintuc_detail.php');
			break;
			
		case "4":
			require_once('dichvu.php'); 
			break;				
		case "6":
			if (empty($_REQUEST["id"]))
				require_once('tuyendung.php'); 
			else
				require_once('tuyendung_detail.php');
			break;

		case "7":
			require_once('thuvienanh.php'); 
			break;
			
		case "8":
			if (empty($_REQUEST["id"]))
				require_once('sanpham.php'); 
			else
				require_once('sanpham_detail.php');
			break;
			
		case "9":
			require_once('lienhe.php'); 
			break;		
		
		//
		case "home":
			require_once('homepage.php'); 
			break;
		case 0:
		default:
			require_once('homepage.php'); 
	}
?>