<?php  if(!defined('_source')) die("Error");
			
		if(isset($_GET['keyword'])){
			$tukhoa =  $_GET['keyword'];
			$tukhoa = trim(strip_tags($tukhoa));    	
    		if (get_magic_quotes_gpc()==false) {
    			$tukhoa = mysql_real_escape_string($tukhoa);    			
    		}								
			// cac tin tuc
			$sql_timkiem = "select * from #_product where (ten_vi LIKE '%$tukhoa%') and hienthi=1 order by stt asc";			
			$d->query($sql_timkiem);
			$result_timkiem = $d->result_array();	
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_timkiem, $url, $curPage, $maxR, $maxP);
			$result_timkiem=$paging['source'];
			
			$total_sp = count($result_timkiem);
		}	
		
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
		<a href="javascript: void(0);" title="" class="ir-menu"></a>
		<?php include _template."layout/menu_top_chitiettin.php"; ?>
			<div class="clearfix"></div>
	</div>
</div>
<div id="content" class="layout-2">

<div class="banner-ir news">
	<div class="swiper-container-ir">
		<div class="swiper-wrapper">
			    <div class="swiper-slide">
                    <a href="https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu/fpt-nhat-ban-can-moc-doanh-thu-100-trieu-usd" title="">
				        <div class="img-bg-ls-news pc" style="opacity: 0.45;background: url(images/bn-news.jpg) no-repeat center 0; background-size: cover;"></div>
				        <div class="img-bg-ls-news mobile" style="opacity: 0.45;background: url(images/bn-news.jpg) no-repeat center 0; background-size: cover;"></div>
				        <div class="wr-page">
					        <div class="qhdt-banner">
					            <p class="b-tt-bn">Trung Huy ra mắt website mới</p>
						        <p> Nội dung đang cập nhật...</p>
					        </div>
				        </div>
                    </a>
			    </div>
			    <div class="swiper-slide">
                    <a href="https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu/fpt-mien-phi-phan-mem-ke-khai-chi-phi-kham-chua-benh-bao-hiem-y-te" title="">
				        <div class="img-bg-ls-news pc" style="opacity: 0.45;background: url(images/bn-news.jpg) no-repeat center 0; background-size: cover;"></div>
				        <div class="img-bg-ls-news mobile" style="opacity: 0.45;background: url(images/bn-news.jpg) no-repeat center 0; background-size: cover;"></div>
				        <div class="wr-page">
					        <div class="qhdt-banner">
					            <p class="b-tt-bn">Trung Huy ra mắt sản phẩm mới</p>
						        <p> Nội dung đang cập nhật...</p>
					        </div>
				        </div>
                    </a>
			    </div>
		</div>
		<div class="swiper-pagination-ir"></div>
		<!-- <div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div> -->
	</div>
</div>

<!-- content home -->

<div class="wrap">
  <div class="wr-page">
    <div class="news_wrap h">
      
      <div class="content-newspage">
        <div id="news_wrap">
          <div class="">
            <div class="list-news clearfix">
              <?php for($i=0,$count_spnam=count($result_timkiem);$i<$count_spnam;) {
              ?>
              <div class='row clearfix'>
              	<?php for($j=0;$j<4;$j++) { ?>
                <?php if($i==$count_spnam)
                {
                	break;
                }
                ?>
                <div class="hn-items">
                  <div class="tt-mobile"> <a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" class="ttn b"> <?=$result_timkiem[$i]["ten_vi"]?></a> </div>
                  <a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" title="Lợi nhuận sau thuế 11 th&#225;ng tăng 9% so với c&#249;ng kỳ">
                  <div class="images-news"> <img class="img-news" src="upload/sanpham/<?php if($result_timkiem[$i]["tc_big"]==1) echo $result_timkiem[$i]["thumb"]; else echo $result_timkiem[$i]["thumb"] ?>" alt="<?=$result_timkiem[$i]["ten_vi"]?>" />
                    <div class="date-ab"><p class="desc r"><?=$result_timkiem[$i]["ten_vi"]?></p></div>
                  </div>
                  </a>
                  <div class="text-info"> <a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" class="ttn b"><?=$result_timkiem[$i]["ten_vi"]?></a>
                    
                    <a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" title="<?=$result_timkiem[$i]["ten_vi"]?>" class="view-more">Xem th&#234;m</a> </div>
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
      </div>
    </div>
  </div>
</div>
<!-- end content home --> 

<script type="text/javascript">
    $(function () {
    	ant.ir_banner();
        ant.news();
        $(window).load(function(){
			var ww = $(window).width();
			if(ww < 960){
				if(window.location.search){
					//scroll
					$("html, body").animate({ scrollTop: $(".content-newspage").offset().top - 60}, 1000);
				}else{
					// k scroll
				}
			}
			$(document).on("change", ".irchange", function () {
			    $('#_submit').trigger('click');
			});

			$(document).on("change", ".qtychange", function () {
			    $('#_submit').trigger('click');
			});

			$(document).on("submit", "#frmSearchNews", function (e) {
			    //console.log('submit form');
			    e.preventDefault();
			    $('#_submit').trigger('click');
			    return false;
			});

			$(document).on("click", "#_submit", function (e) {
			    e.preventDefault();
			    searchNews(0, 1, 12);
			    return false;
			});
        });
    });

    function searchNews(cid, page, perpage) {
        $.post("https://www.fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu", {
            page: page,
            perpage: $('#_per').val(),
            search_text: $("#_searchText").val(),
            category: $("#_cid").val(),
            sort: $('#_sort').val()
        }, function (e) {
            $("#news_wrap").html(e);
            $('html, body').animate({scrollTop:$('.content-newspage').position().top - 70}, 1500);
        })
    }
</script>
</div>
<a href="javascript: void(0);" class="click-top-scroll"> <img class="top-scroll" src="images/top.png" alt="" /> </a>