<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_item='$id'  order by stt asc ";
			//die($sql_tungdanhmuc);
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_item="select * from #_product_item where hienthi =1 and id='$id'";
			$d->query($sql_item);	
			$result_item=$d->fetch_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_item['id_list']."'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
			$d->reset();
			$sql_laycat="select * from #_product_cat where hienthi =1 and id='".$result_item['id_cat']."'";
			$d->query($sql_laycat);	
			$result_cat=$d->fetch_array();	
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=12;
			$maxP=5;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
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
    <div class="breadcrumb">
		<div class="wr-page r">
			<a href="index.html" title="Trang chủ">Trang chủ&nbsp;&nbsp;></a>&nbsp;&nbsp;<span><?=$result_laylist["ten_vi"]?></span>
		</div>
    </div>

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
<script type="text/javascript">
  function ajaxordernoibat(value) {
      $.ajax({
          type   : "POST",
          url    : "ajaxordernoibatitem_tpl.php",
          data   : {id: <?=$id?>, value: value, url: '<?=$url?>'},
          success: function (data) {
            $(".content-newspage").html(data);
          }
      });
  }
  function ajaxorderper(value) {
      $.ajax({
          type   : "POST",
          url    : "ajaxorderperitem_tpl.php",
          data   : {id: <?=$id?>, value: value, url: '<?=$url?>'},
          success: function (data) {
            $(".content-newspage").html(data);
          }
      });
  }
  function ajaxordersearch() {
	  var value =  $("#searchtext").val();
      $.ajax({
          type   : "POST",
          url    : "ajaxordersearchitem_tpl.php",
          data   : {id: <?=$id?>, value: value, url: '<?=$url?>'},
          success: function (data) {
            $(".content-newspage").html(data);
          }
      });
  }
</script>
<!-- content home -->

<div class="wrap">
  <div class="wr-page">
    <div class="news_wrap h">
      <div class="box_dropdown">
          <div class="sb_1">
            <select onchange="ajaxordernoibat(this.value)" class="sbox irchange" name="sort" id="_sort">
              <option value="0" >--Chọn--</option>
              <option value="1" >Mới nhất</option>
              <option value="2" >Xem nhiều</option>
            </select>
            <div class="icon-srr-fk"></div>
          </div>
          <div class="sb_1 sb_nu">
            <div class="span">Số tin hiển thị</div>
            <div class="fix-select">
              <select onchange="ajaxorderper(this.value)" class="sbox qtychange" name="per" id="_per">
                <option value="12" >12</option>
                <option value="16" >16</option>
                <option value="20" >20</option>
                <option value="24" >24</option>
                <option value="28" >28</option>
              </select>
            </div>
            <div class="icon-srr-fk"></div>
          </div>
          <div class="search-related r right">
            <input type="text" name="searchtext" id="searchtext" placeholder="" value="" />
            <input onclick="ajaxordersearch()" type="submit" class="submit" value="&nbsp;" />
          </div>
        <div class="clearfix"></div>
      </div>
      <div class="content-newspage">
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