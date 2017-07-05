<?php  if(!defined('_source')) die("Error");
	$d->setTable('gioithieu');
	$d->select("noidung_$lang,mota_$lang,link");
	if($d->num_rows()>0){
		$row = $d->fetch_array();
		$noidung_about= $row["noidung_$lang"];
		$noidung_mota= $row["mota_$lang"];
		$noidung_link= $row['link'];
	}
		
			
	$d->reset();
	$sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 0,9";
	$d->query($sql_tin_foo);
	$result_tinll_c=$d->result_array();
	
	
	$d->reset();
	$sql_contact = "select noidung_$lang from #_lienhe ";
	$d->query($sql_contact);
	$company_contact = $d->fetch_array();
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
<div id="content" class="layout-2">
    <div class="breadcrumb">
	
</div>
<div class="container-news">
	<div class="news_wrap wr-page dt">
		<div class="box_news_detail">
			<div class="news_content" style="width: 100%;">
				
				<div class="content">
					<p style="text-align:justify"><?=$company_contact['noidung_vi']?></p>

				</div>
				<!-- <div class="other_news">
				</div> -->
			</div>
			<div class="clear"></div>
		</div>
	</div>
    
</div>
<!-- end content home -->

	</div>
	<a href="javascript: void(0);" class="click-top-scroll">
		<img class="top-scroll" src="images/top.png" alt="" />
	</a>
