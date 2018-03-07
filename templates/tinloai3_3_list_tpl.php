<?php 
			$d->reset();
			$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_product where hienthi =1 and id_cat='".$id."' order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			$sql_tenmenucat="select * from #_product_cat where id ='".$id."'";
			$d->query($sql_tenmenucat);
			$result_tenmenucat=$d->result_array();
			$tenmenucat = $result_tenmenucat['0']['ten_vi'];
			$tenmenucatkhongdau = $result_tenmenucat['0']['tenkhongdau'];
			$idmenulist = $result_tenmenucat['0']['id_list'];
			$idmenucat = $result_tenmenucat['0']['id'];
			$sql_tenmenulist="select * from #_tinloai1_1_list where id ='".$idmenulist."'";
			$d->query($sql_tenmenulist);
			$result_tenmenulist=$d->result_array();
			$tenmenulist = $result_tenmenulist['0']['ten_vi'];
			$tenmenulistkhongdau = $result_tenmenulist['0']['tenkhongdau'];
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			$sql_tinll_name="select * from #_tinloai1_1_cat where id='".$id."'";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	

?>
<div id="header">
		<a href="javascript: void(0);" class="search-mb"></a>
	  <script type="text/javascript">
		$(document).ready(function(){
			$(".lg-mb").click(function(){
				window.location.href = $("#clang_link").val();
			})
		})
		</script>
		<div class="lg-mb">
		  <input type="hidden" name="clang_link" id="clang_link" value="https://www.fpt.com.vn/en/"/>
		</div>
		<div class="ip-search boxs-mb r">
			<img src="images/ar-s.png" alt="" />
			<form action=" " method="get">
				<input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
			</form>
	  </div>
		<a href="javascript: void(0);" title="" class="ic-menu"></a>
		<div class="wr-page">
			<div class="logo fl"><a href="index.html" title=""><img src="images/logo.png" alt="" class="w100" /></a></div>
			<div class="lag fr">
				<a href="https://www.fpt.com.vn/en/" title="" class=" lag-en"></a>
				<a href="javascript:void(0);" title="" class="active lag-vi"></a>
			</div>
			 <?php include _template."layout/menu_top.php"; ?>
			<div class="clear"></div>
		</div>
</div> 
<div id="content">
  <div class="breadcrumb">
    <div class="wr-page r"> 
    	<a href="index.html" title="Trang chủ">Trang chủ&nbsp;&nbsp;></a>
    	&nbsp;&nbsp;
    	<a href="tin-tuc.html" title="Trang chủ">Tin Tức&nbsp;&nbsp;></a>&nbsp;&nbsp;
    	<span><?=$tenmenulist?></span> </div>
  </div>
  <div style="background: url(images/dich-vu-cntt.jpg) center center no-repeat;" class="news_banner news"> <img class="bg-banner" src="images/07-DichVuCNTT.jpg" alt="" />
    <div class="banner-tt">
      <div class="tt-bn"> <span class="f-dax-b tit-banner" style="white-space:pre-line;">Với mạng lưới to&#224;n cầu, Trung Huy c&#243; thể c&#249;ng l&#250;c sử dụng nguồn lực  
        trong v&#224; ngo&#224;i nước để cung cấp dịch vụ hiệu quả nhất cho kh&#225;ch h&#224;ng</span> </div>
    </div>
  </div>
  <div class="business-service fix-img-center sv-cntt">
  <?php for($i=0,$count_tl=count($result_tinl);$i<$count_tl;$i++)
  { 
  	if($i%2==0)
  	{
  ?>
    <div class="business-service-it one">
      <div class="ani-gen">
        <div class="wr-page">
          <div class="service-it">
            <div class="tt f-dax-b"><?=$result_tinl[$i]["ten_vi"]?></div>
            <div class="info f-dax">
              <div style='text-align: justify;'><?=$result_tinl[$i]["mota_vi"]?></div>
            </div>
            <img class="fix-center mb-item" src="upload/sanpham/<?=$result_tinl[$i]["thumb"]?>" alt="" title="" /> <a class="btn-service f-dax-b" href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html" target="_blank" title="">Tìm hiểu thêm</a> </div>
          <div class="service-it img-c pc-item"> <img class="fix-center" src="upload/sanpham/<?=$result_tinl[$i]["thumb"]?>" alt="" title="" /> </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  <?php 
  	}
  	else 
  	{
  ?>
  <div class="business-service-it two">
        <div class="ani-gen">
            <div class="wr-page">
                <div class="service-it img-c pc-item">
                    <img class="fix-center"  src="upload/sanpham/<?=$result_tinl[$i]["thumb"]?>" alt="" title="" />
                </div>
                <div class="service-it">
                    <div class="tt f-dax-b"><?=$result_tinl[$i]["ten_vi"]?></div>
                    <div class="info f-dax"><div style="text-align: justify;"><?=$result_tinl[$i]["mota_vi"]?></div></div>
                    <img class="fix-center mb-item" src="upload/sanpham/<?=$result_tinl[$i]["thumb"]?>" alt="" title="" />
                    <a class="btn-service f-dax-b" href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html" target="_blank" title="">Tìm hiểu thêm</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
  <?php
  	}
  }
  ?>
  </div>
</div>
<a href="javascript: void(0);" class="click-top-scroll"> <img class="top-scroll" src="/Content/home/images/icon/top.png" alt="" /> </a>