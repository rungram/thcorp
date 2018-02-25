<?php 
			$id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tanglx="update  #_tinloai1_1 set luotxem=luotxem+1 where id='$id'";
			$d->query($sql_tanglx);
	
	
			$sql_detail="select * from #_tinloai1_1 where id='$id'";
			$d->query($sql_detail);	
			$result_detail=$d->fetch_array();
			$id_list = $result_detail['id_list'];
			
			
			$d->reset();
			$sql_tinlq="select * from #_tinloai1_1 where  id<>'$id' and id_list = '$id_list' limit 0,3 ";
			$d->query($sql_tinlq);	
			$result_tinlq=$d->result_array();
			
?>
<div id="container" class="ir-page">
	<div id="header" class="black">
		<a href="javascript: void(0);" class="search-mb"></a>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.lg-mb').click(function () {
                    window.location.href = $('#clang_link').val();
                })
            })
		</script>
		<div class="lg-mb">
			<input type="hidden" name="clang_link" id="clang_link" value='https://www.fpt.com.vn/en/ir/news'/>			
		</div>
		<div class="ip-search boxs-mb r">
			<img src="images/ar-s.png" alt="" />
			<form action="https://www.fpt.com.vn/vi/tim-kiem" method="get">
				<input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
			</form>
		</div>
		<a href="javascript: void(0);" title="" class="ir-menu"></a>
		<?php include _template."layout/menu_top_chitiettin.php"; ?>
			<div class="clearfix"></div>
	</div>
</div>
<div id="content" class="layout-2">
    <div class="breadcrumb">
	<div class="wr-page r">
		<a href="index.html" title="Trang chủ">Trang chủ&nbsp;&nbsp;&gt;</a>&nbsp;&nbsp;<a href="giaiphap" title=""> Tin tức giải pháp</a>
	</div>
</div>
<!-- content home -->
<div class="container-news">
	<div class="news_wrap wr-page dt">
		<div class="box_news_detail">
			<div class="news_content">
				<div class="return hide">
					<a class="b" href="" title="">&lt; Quay lại</a>
					<div class="share right">
	                    <div class="fb-like fb_iframe_widget" data-href="https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu/voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1050260161666151&amp;container_width=0&amp;href=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f7c3054af8d354" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" style="border: medium none; visibility: visible; width: 0px; height: 0px;" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=1050260161666151&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiPrOY23SGAp.js%3Fversion%3D42%23cb%3Df9769efd520764%26domain%3Dwww.fpt.com.vn%26origin%3Dhttps%253A%252F%252Fwww.fpt.com.vn%252Ff3307c3796eabd4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false" class="" width="1000px" height="1000px" frameborder="0"></iframe></span></div>
	                    <iframe id="twitter-widget-0" scrolling="no" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: absolute; visibility: hidden; width: 0px; height: 0px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.3748f7cda49448f6c6f7854238570ba0.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;size=m&amp;text=V%E1%BB%9Bi%20h%C6%A1n%20200%20ch%E1%BB%A9ng%20ch%E1%BB%89%20TRUNG HUY%20Software%20%C4%91%C6%B0%E1%BB%A3c%20ch%E1%BB%A9ng%20nh%E1%BA%ADn%20%C4%91%E1%BA%B7c%20bi%E1%BB%87t%20t%E1%BB%AB%20AWS&amp;time=1483000371561&amp;type=share&amp;url=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" frameborder="0"></iframe>
					</div>
					<div class="clear"></div>
				</div>
				<h2 class="title b"><?=$result_detail['ten_vi']?></h2>
				<div class="tagline">
					<div class="daytime left">Ngày <?=$result_detail['ngaytao']?></div>
					<div class="share right">
                        <div class="fb-share-button-custom social-share" onclick="return share_facebook_ui('https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu/voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws', 'Với hơn 200 chứng chỉ TRUNG HUY Software được chứng nhận đặc biệt từ AWS ',' Chỉ trong vòng 3 tháng gần đây, TRUNG HUY Software đã đạt được hơn 100 chứng chỉ khác nhau của Amazon Web Serviecs (AWS), nâng tổng số chứng chỉ AWS của công ty lên con số 200.','https://www.fpt.com.vn//images/cache_image/200x200/AWS200_800px_color.jpg')"><img src="/content/home/images/icon/fb-share.png" alt="Facebook share"></div>
                        <div class="fb-like social-share fb_iframe_widget" data-href="https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu/voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1050260161666151&amp;container_width=0&amp;href=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false"><span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe name="f121bd7687e9ec8" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" style="border: medium none; visibility: visible; width: 86px; height: 20px;" src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=1050260161666151&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FiPrOY23SGAp.js%3Fversion%3D42%23cb%3Df125005b6771fe%26domain%3Dwww.fpt.com.vn%26origin%3Dhttps%253A%252F%252Fwww.fpt.com.vn%252Ff3307c3796eabd4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=false&amp;show_faces=false" class="" width="1000px" height="1000px" frameborder="0"></iframe></span></div>
                        <iframe id="twitter-widget-1" scrolling="no" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 61px; height: 20px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.3748f7cda49448f6c6f7854238570ba0.en.html#dnt=false&amp;id=twitter-widget-1&amp;lang=en&amp;original_referer=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws&amp;size=m&amp;text=V%E1%BB%9Bi%20h%C6%A1n%20200%20ch%E1%BB%A9ng%20ch%E1%BB%89%20TRUNG HUY%20Software%20%C4%91%C6%B0%E1%BB%A3c%20ch%E1%BB%A9ng%20nh%E1%BA%ADn%20%C4%91%E1%BA%B7c%20bi%E1%BB%87t%20t%E1%BB%AB%20AWS&amp;time=1483000371576&amp;type=share&amp;url=https%3A%2F%2Fwww.fpt.com.vn%2Fvi%2Fnhadautu%2Ftin-tuc-nha-dau-tu%2Fvoi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" frameborder="0"></iframe>
					</div>
					<div class="clear"></div>
				</div>
				<div class="content">
					<p style="text-align:justify"><?=$result_detail['noidung_vi']?></p>

				</div>
				<!-- <div class="other_news">
				</div> -->
			</div>
            
			
				<div class="box_list">
					<div class="news_headline green">
						<span class="title">Tin liên quan</span>
					</div>
					<div class="list_item new-structure">
					<?php 
					   for ($i = 0; $i < count($result_tinlq); $i++) 
					   {
					?>
					<div class="item">
				        <a href="chi-tiet-giai-phap/<?=$result_tinlq[$i]["tenkhongdau"]?>-<?=$result_tinlq[$i]["id"]?>.html" title=""><img src="upload/tinloai1_1/<?=$result_tinlq[$i]["thumb"]?>" alt="<?=$result_tinlq[$i]["ten_vi"]?>" title="<?=$result_tinlq[$i]["ten_vi"]?>"></a>
				        <div class="text">
					        <div><a href="tin-tuc-detail/<?=$result_tinlq[$i]["tenkhongdau"]?>-<?=$result_tinlq[$i]["id"]?>.html" title=""><?=$result_tinlq[$i]["ten_vi"]?></a></div>
				        </div>
				        <div class="clear"></div>
			        </div>
					<?php
					   }
					?>
					</div>
				</div>
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