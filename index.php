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
<html>
<head>
<base href="http://<?=$config_url?>/"  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="/Content/home/images/favicon.png" type="image/x-icon"/>
<meta property="og:title" content="C.ty TNHH PTCNKTTH TRUNG HUY" /> 
<meta property="og:description" content="C.ty TNHH PTCNKTTH TRUNG HUY" /> 
<meta property="og:image" content="" /> 
<meta property="og:video" content=""/>
<meta name="keywords" content="C.ty TNHH PTCNKTTH TRUNG HUY" />
<meta name="description" content="C.ty TNHH PTCNKTTH TRUNG HUY" />
<meta name="keywords" content="C.ty TNHH PTCNKTTH TRUNG HUY" />
<meta name="author" content="C.ty TNHH PTCNKTTH TRUNG HUY" />
<link rel="stylesheet" href="home/css/all.css" type="text/css">
<link rel="stylesheet" href="home/css/style.css" type="text/css">

<link rel="stylesheet" href="css/vantam.css" type="text/css">
<!--[if IE 9]>
	<link rel="stylesheet" href="/Content/home/css/cssie.css" type="text/css">
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" href="/Content/home/css/cssie.css" type="text/css">
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" href="/Content/home/css/cssie.css" type="text/css">
<![endif]-->
<script id="twitter-wjs" src="js/widgets.js"></script>
<script type="text/javascript" src="home/js/jquery-1.9.0.js"></script>
<script type="text/javascript">
    var base_url = '<?php echo $config_url1;?>/'; var base_url_lang = '<?php echo $config_url1;?>/'; var lang = 'vi';
    var text_congnghe = 'Khóa cửa từ';
    var text_vienthong = 'Camera';
    var text_phanphoi_banle = 'Đèn LED';
    var text_giaoduc = 'Máy nước nóng NLMT';
    var text_giaoduc_test = 'Máy nghiền thực phẩm thải';
</script>

<title>C.ty TNHH PTCNKTTH TRUNG HUY</title>
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");

    ga("create", " ", "auto");
    ga("send", "pageview");
</script>

</head>
<body class="lg_vi">

<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: "875758619167734",
            status: true,
            cookie: true,
            xfbml: true
        });
    };

    (function () {
        var e = document.createElement("script");
        e.src = document.location.protocol + "//connect.facebook.net/en_US/all.js";
        e.async = true;
        document.getElementById("fb-root").appendChild(e);
    }());
</script>

<script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? "http" : "https"; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
<div class="error-ie9">
	<div>Quý khách vui lòng cập nhật trình duyệt mới nhất (phiên bản IE 10) hoặc dùng trinh duyệt chrome hay firefox truy cập Website C.ty TNHH PTCNKTTH TRUNG HUY<br/>
Xin cảm ơn quý khách!</div>
</div>
<div id="container">
	<?php include _template.$template."_tpl.php"; ?> 
	<?php include _template."layout/footer.php"; ?>
	
</div>
<script type="text/javascript" src="home/js/all.js"></script>
<script type="text/javascript" src="home/js/animate_fpt.js"></script>
<script type="text/javascript" src="home/js/main.js"></script>
<script type="text/javascript">
    function share_facebook_ui(url, title, summary, img) {
        if (typeof title == "undefined" || title == "") {
            title = "C.ty TNHH PTCNKTTH TRUNG HUY";
            summary = "C.ty TNHH PTCNKTTH TRUNG HUY";
            url = base_url;
        }
        if (typeof img == "undefined" || img == "") {
            img = base_url + "images/fb-share.jpg";
        }
        FB.ui({
            method: "feed",
            name: title,
            link: url,
            picture: img,
            caption: "",
            description: summary,
            message: ""
        }, function (response) {
            if (response && response.post_id) {
                //alert("Post was published.");
            } else {
                //alert("Post was not published.");
            }
        });
    }
</script>
</body>
</html>