<?php
	require_once('common.php');
	require_once("ctrl_header.php");
	//Import control
?>
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
  <div id="header"> <a href="javascript: void(0);" class="search-mb"></a> 
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
    <div class="ip-search boxs-mb r"> <img src="images/ar-s.png" alt="" />
      <form action=" " method="get">
        <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
      </form>
    </div>
    <a href="javascript: void(0);" title="" class="ic-menu"></a>
    <div class="wr-page">
      <div class="logo fl"><a href="https://www.fpt.com.vn/vi/" title=""><img src="images/logo.png" alt="" class="w100" /></a></div>
      <div class="lag fr"> <a href="https://www.fpt.com.vn/en/" title="" class=" lag-en"></a> <a href="javascript:void(0);" title="" class="active lag-vi"></a> </div>
      <div class="search fr"> <a href="javascript: void(0);" title="" class="ic-search"></a>
        <div class="ip-search boxs-pc r"> <img src="images/ar-s.png" alt="" />
          <form action="https://www.fpt.com.vn/vi/tim-kiem" method="get">
            <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="q" id="inp_search" />
          </form>
        </div>
      </div>
      <div class="pc-menu menu fr">
        <ul>
          <li class=""> <a href="https://www.fpt.com.vn/vi/ve-fpt" class="" title=""> Về chúng tôi <em class="arr-mb-mn"></em> </a>
            <div class="sub b">
              <ul>
                <li class="has-sub "> <img class="ar" src="images/subt.png" alt="" /> <a href="javascript: void(0);" class="sub-sub "> Lịch sử <em class="arr-mb-mn"></em> </a>
                  <ul class="sub-two">
                    <li> <a href="https://www.fpt.com.vn/vi/ve-fpt/lich-su/cac-moc-lich-su" class="">C&#225;c mốc lịch sử </a> </li>
                    <li> <a href="https://www.fpt.com.vn/vi/ve-fpt/lich-su/nguoi-tien-phong" class="">Những người ti&#234;n phong</a> </li>
                  </ul>
                </li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/van-hoa" class="" title="">Văn h&#243;a</a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" class="" title="">Định hướng c&#244;ng nghệ</a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/mang-luoi-toan-cau" class="" title="">Mạng lưới to&#224;n cầu</a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/cong-ty-thanh-vien" class="" title="">C&#244;ng ty th&#224;nh vi&#234;n</a></li>
                <li class="has-sub "> <img class="ar" src="images/subt.png" alt="" /> <a href="javascript: void(0);" class="sub-sub "> Đội ngũ l&#227;nh đạo <em class="arr-mb-mn"></em> </a>
                  <ul class="sub-two">
                    <li> <a href="https://www.fpt.com.vn/vi/ve-fpt/doi-ngu-lanh-dao/hoi-dong-quan-tri" class="">Hội đồng quản trị</a> </li>
                    <li> <a href="https://www.fpt.com.vn/vi/ve-fpt/doi-ngu-lanh-dao/ban-dieu-hanh" class="">Ban điều h&#224;nh</a> </li>
                    <li> <a href="https://www.fpt.com.vn/vi/ve-fpt/doi-ngu-lanh-dao/ban-dieu-hanh-cong-ty-thanh-vien" class="">Ban điều h&#224;nh C&#244;ng ty th&#224;nh vi&#234;n</a> </li>
                  </ul>
                </li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/trach-nhiem-xa-hoi" class="" title="">Tr&#225;ch nhiệm x&#227; hội</a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/giai-thuong" class="" title="">Giải thưởng </a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/doi-tac" class="" title="">Đối t&#225;c</a></li>
                <li><a href="https://www.fpt.com.vn/vi/ve-fpt/thu-vien" class="" title="">Thư viện ảnh &amp; Video</a></li>
              </ul>
            </div>
          </li>
          <li class=""> <a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh" class="" title=""> Lĩnh vực kinh doanh <em class="arr-mb-mn"></em> </a>
            <div class="sub b">
              <ul>
                <li class="has-sub "> <img class="ar" src="images/subt.png" alt="" /> <a href="javascript: void(0);" class="sub-sub "> Nội Thất <em class="arr-mb-mn"></em> </a>
                  <ul class="sub-two">
                    <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/dich-vu-cong-nghe-thong-tin" class="">Dịch vụ c&#244;ng nghệ th&#244;ng tin</a></li>
                    <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/tich-hop-he-thong" class="">T&#237;ch hợp hệ thống</a></li>
                    <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/giai-phap-theo-nganh" class="">Giải ph&#225;p theo ng&#224;nh</a></li>
                  </ul>
                </li>
                <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong" class="" title="">Công Nghệ</a></li>
                <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin" class="" title="">Ph&#226;n phối &amp; b&#225;n lẻ 
                  sản phẩm c&#244;ng nghệ</a></li>
                <li><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/giao-duc" class="" title="">Gi&#225;o dục</a></li>
              </ul>
            </div>
          </li>
          <li class=""> <a href="https://www.fpt.com.vn/vi/tin-tuc" class="" title=""> Tin tức <em class="arr-mb-mn"></em> </a>
            <div class="sub b"> <a href="https://www.fpt.com.vn/vi/tin-tuc/thong-cao-bao-chi" class="" title="">Th&#244;ng c&#225;o
              b&#225;o ch&#237;</a> <a href="https://www.fpt.com.vn/vi/tin-tuc/hoat-dong-su-kien" class="" title="">Hoạt động
              sự kiện</a> <a href="https://www.fpt.com.vn/vi/tin-tuc/cau-chuyen-du-an" class="" title="">C&#226;u chuyện 
              dự &#225;n</a> </div>
          </li>
          <li class=""> <a href="https://www.fpt.com.vn/vi/nhadautu" target="_blank" class="" title="">Quan hệ nh&#224; đầu tư</a> </li>
          <li class=""> <a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep" class="" title=""> Cơ hội nghề nghiệp <em class="arr-mb-mn"></em> </a>
            <div class="sub b">
              <ul>
                <li><a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep/cuoc-song-tai-fpt" class="" title="">Cuộc sống tại C.ty TNHH PTCNKTTH TRUNG HUY</a></li>
                <li><a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep/dinh-huong-nghe-nghiep" class="" title="">Định hướng nghề nghiệp</a></li>
                <li><a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep/chinh-sach-cho-nguoi-lao-dong" class="" title="">Ch&#237;nh s&#225;ch cho người lao động</a></li>
                <li><a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep/quy-trinh-tuyen-dung" class="" title="">Quy tr&#236;nh tuyển dụng</a></li>
                <!-- <li><a href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep/noi-lam-viec" class="" title="">T&#236;m kiếm cơ hội tại TRUNG HUY</a></li> -->
                <li><a href="http://tuyendung.fpt.com.vn" target="_blank" class="" title="">T&#236;m kiếm cơ hội tại C.ty TNHH PTCNKTTH TRUNG HUY</a></li>
              </ul>
            </div>
          </li>
          <li class=""><a href="https://www.fpt.com.vn/vi/lien-he" title="">Li&#234;n hệ</a></li>
          
          <!-- <li class="language-mobile clearfix vi">
						<a href="https://www.fpt.com.vn/en/" class="lg-en"><span></span> English</a>
						<a href="javascript:void(0);" class="lg-vi"><span></span> Tiếng Việt</a>
					</li> -->
          
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="content"> 
    <script type="text/javascript">
    $(window).load(function () {
        setTimeout(function () {
            $("#header").stop().animate({ top: 0 });
        }, 3000);
    })
</script>
    <div class="wrap pcv">
      <div class="frame-screen frame1" style="height: 600px;">
        <div class="swiper-container swiper-f1 swiper-container-horizontal swiper-container-fade" id="fr1-homebanner" style="opacity: 1;">
          <div class="swiper-wrapper" style="transition-duration: 300ms;">
            <div class="swiper-slide slider-home1 slider-home  swiper-slide-duplicate" data-src="images/slide/1.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;images/slide/1.jpg&quot;);" data-swiper-slide-index="3"> <a class="link-bhome" target="_blank" href="https://fpt.com.vn/vi/ve-fpt"></a> </div>
            <div class="swiper-slide slider-home1 slider-home swiper-slide-prev" data-src="images/slide/Merry-Xmas_1920_TA.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;images/slide/Merry-Xmas_1920_TA.jpg&quot;);" data-swiper-slide-index="0"> </div>
            <div class="swiper-slide slider-home1 slider-home swiper-slide-active" data-src="images/Cuoc-dua-so-TV.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;/Images/images/slide/Cuoc-dua-so-TV.jpg&quot;);" data-swiper-slide-index="1"> <a class="link-bhome" target="_blank" href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-to-chuc-dua-xe-khong-nguoi-lai"></a> </div>
            <div class="swiper-slide slider-home1 slider-home swiper-slide-next" data-src="images/1920_TV.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;/Images/images/slide/1920_TV.jpg&quot;);" data-swiper-slide-index="2"> <a class="link-bhome" target="_blank" href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-nhat-ban-can-moc-doanh-thu-100-trieu-usd"></a> </div>
            <div class="swiper-slide slider-home1 slider-home" data-src="images/1.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;/Images/images/slide/1.jpg&quot;);" data-swiper-slide-index="3"> <a class="link-bhome" target="_blank" href="https://fpt.com.vn/vi/ve-fpt"></a> </div>
            <div class="swiper-slide slider-home1 slider-home  swiper-slide-duplicate" data-src="images/Merry-Xmas_1920_TA.jpg" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;/Images/images/slide/Merry-Xmas_1920_TA.jpg&quot;);" data-swiper-slide-index="0"> </div>
          </div>
        </div>
        <div class="swiper-pagination pager-f1 swiper-pagination-clickable"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        <div class="frame-footer">
          <div class="wr-page">
            <div class="swiper-frame swiper-container-horizontal">
              <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-4px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active">
                  <div class="col1">
                    <table class="tb100-fix">
                      <tbody>
                        <tr>
                          <td><table class="fix-as">
                              <tbody>
                                <tr>
                                  <td><img class="left" src="images/ico1.png" alt=""></td>
                                  <td><div class="text left">
                                      <p class="t1 f-dax">Doanh thu 2015</p>
                                      <p class="t2 avb">40.003</p>
                                      <p class="t3">tỷ VND</p>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-next">
                  <div class="col2">
                    <table class="tb100-fix">
                      <tbody>
                        <tr>
                          <td><table>
                              <tbody>
                                <tr>
                                  <td><img class="left" src="images/ico2.png" alt=""></td>
                                  <td><div class="text left">
                                      <p class="t1 f-dax">Giá trị vốn hóa</p>
                                      <p class="t2 avb">19.197<sup>+</sup></p>
                                      <p class="t3">tỷ VND</p>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col3">
                    <table class="tb100-fix">
                      <tbody>
                        <tr>
                          <td><table>
                              <tbody>
                                <tr>
                                  <td><img class="left" src="images/ico3.png" alt=""></td>
                                  <td><div class="text left">
                                      <p class="t1 f-dax">Quy mô nhân sự</p>
                                      <p class="t2 avb">27.900<sup>+</sup></p>
                                      <p class="t3">người</p>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col4">
                    <table class="tb100-fix">
                      <tbody>
                        <tr>
                          <td><table>
                              <tbody>
                                <tr>
                                  <td><img class="left" src="images/ico4.png" alt=""></td>
                                  <td><div class="text left">
                                      <p class="t1 f-dax">Hiện diện</p>
                                      <p class="t2 avb">20<!--20--> <span style="font-size:14px;">tại</span></p>
                                      <p class="t3">quốc gia</p>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="col5">
                    <table class="tb100-fix">
                      <tbody>
                        <tr>
                          <td><table>
                              <tbody>
                                <tr>
                                  <td><img class="left" src="images/ico5.png" alt=""></td>
                                  <td><div class="text left">
                                      <p class="t1"><span class="avb">04</span></p>
                                      <p class="t2">lĩnh vực</p>
                                      <p class="t2">kinh doanh</p>
                                      <p class="t3">cốt lõi</p>
                                    </div></td>
                                </tr>
                              </tbody>
                            </table></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="menu-ft-f1">
        <div class="ct-menu-ft-f1 clearAll wr-page">
          <div class="tt b left">Tin tức</div>
          <div class="list_news_f1">
            <div class="swiper-more left">
              <div class="tickercontainer">
                <div class="mask">
                  <ul id="webticker" class="newsticker" style="width: 3456px; transition-duration: 7.04286s; left: -493px;">
                    <!-- <div class="for-nwidth"> -->
                    
                    <li class="news-animate r "> <a href="chi-tiet.html" title="Bát Tràng: Thổi hồn xưa gạch Việt">Bát Tràng: Thổi hồn xưa gạch Việt</a> </li>
                    <li class="news-animate r hide-mb"> <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/loi-nhuan-sau-thue-11-thang-tang-9-so-voi-cung-ky" title="Lợi nhuận sau thuế 11 tháng tăng 9% so với cùng kỳ ">Lợi nhuận sau thuế 11 tháng tăng 9% so với cùng kỳ </a> </li>
                    <li class="news-animate r hide-mb"> <a href="#" title="AHNĐ-MDOT023">AHNĐ-MDOT023</a> </li>
                    <li class="news-animate r "> <a href="#" title="Loại vật liệu này giờ đây đang bị mai một dần vì những nghệ nhân Bát Tràng không còn đốt lò như xưa.">Loại vật liệu này giờ đây đang bị mai một dần vì những nghệ nhân Bát Tràng không còn đốt lò như xưa.</a> </li>
                    <li class="news-animate r "> <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" title="Với hơn 200 chứng chỉ FPT Software được chứng nhận đặc biệt từ AWS ">Với hơn 200 chứng chỉ FPT Software được chứng nhận đặc biệt từ AWS </a> </li>
                    <li class="news-animate r "> <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-software-phat-trien-ung-dung-nhac-so-cho-doi-tac-tai-philippines" title="FPT Software phát triển ứng dụng nhạc số cho đối tác tại Philippines ">FPT Software phát triển ứng dụng nhạc số cho đối tác tại Philippines </a> </li>
                  </ul>
                  <span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span></div>
              </div>
              <!-- </div> --> 
            </div>
          </div>
        </div>
      </div>
      <div class="frame-screen frame2" style="height: 600px;">
        <div class="swiper-f2 swiper-container-horizontal swiper-container-fade">
          <ul class="slider-f2 swiper-wrapper" style="transition-duration: 0ms;">
            <li class="sl1 swiper-slide" style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"> <img class="bg change-src" data-change-src="/Content/home/images/img/f2-1.png" src="images/f2-1.png" alt=""> <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/giai-phap-theo-nganh" title="">
              <div class="point p1" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Giải pháp theo ngành:</strong></p>
                  <p>Tài chính &ndash; ngân hàng</p>
                  <p>Chính phủ điện tử</p>
                  <p>Viễn thông</p>
                  <p>Y tế</p>
                  <p>Giao thông</p>
                  <p>Điện, Nước, Gas</p>
                  <p>...</p>
                </div>
              </div>
              </a>
              <div class="point p2" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Sản phẩm</strong></p>
                  <a href="http://www.fis.com.vn/san-pham/fptehospital" target="_blank">
                  <p>C.ty TNHH PTCNKTTH TRUNG HUY.eHospital</p>
                  </a> <a href="http://www.fis.com.vn/san-pham/fptegov" target="_blank">
                  <p>C.ty TNHH PTCNKTTH TRUNG HUY.eGov</p>
                  </a>
                  <p>eMobiz</p>
                  <p>...</p>
                </div>
              </div>
              <!-- </a> --> 
              <!-- <a class="fancybox" href="#pop-tec-three" title=""> --> 
              <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/dich-vu-cong-nghe-thong-tin" title="">
              <div class="point p3" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r sole">
                  <p><strong>Dịch vụ:</strong></p>
                  <p>Điện toán đám mây</p>
                  <p>BPO, ERP</p>
                  <p>Internet của VẠN VẬT</p>
                  <p>Chuyển đổi hệ thống</p>
                  <p>...</p>
                </div>
              </div>
              </a> </li>
            <li class="sl2 swiper-slide swiper-slide-prev" style="width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;"> <img class="bg change-src" data-change-src="images/f2-2.png" src="images/f2-2.png" alt=""> 
              <!-- <a class="fancybox" href="#pop-telecom-one" title=""> --> 
              <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong#trung-tam-du-lieu" title="">
              <div class="point p1" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text ri r">
                  <p><strong>Trung tâm dữ liệu</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-telecom-two" title=""> --> 
              <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong#kenh-thue-rieng" title="">
              <div class="point p2" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Kênh thuê riêng</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-telecom-three" title=""> -->
              <div class="point p3" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text ri ct r">
                  <p><strong>Dịch vụ trực tuyến</strong></p>
                  <p><a target="_blank" href="http://vnexpress.net/" title="Online media">Online media</a></p>
                  <p><a target="_blank" href="https://www.sendo.vn/" title="E-commerce">E-commerce</a></p>
                  <p><a target="_blank" href="https://www.fshare.vn/" title="Fshare">Fshare</a></p>
                  <p><a target="_blank" href="http://fsend.vn/" title="Fsend">Fsend</a></p>
                  <p><a target="_blank" href="https://fptplay.net/" title="C.ty TNHH PTCNKTTH TRUNG HUY Play">C.ty TNHH PTCNKTTH TRUNG HUY Play</a></p>
                  <p><a target="_blank" href="http://fptplay.tv/" title="C.ty TNHH PTCNKTTH TRUNG HUY Playbox">C.ty TNHH PTCNKTTH TRUNG HUY Playbox</a></p>
                  <p><a target="_blank" href="http://mix166.com/" title="Mix166">Mix166</a></p>
                  <p><a target="_blank" href="http://startalk.vn/" title="Startalk">Startalk</a></p>
                </div>
              </div>
              <!-- <a class="fancybox" href="#pop-telecom-four" title=""> -->
              <div class="point p4" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text th r" style="padding-bottom: 35px;">
                  <p><strong>Dịch vụ truyền hình</strong></p>
                </div>
              </div>
              <!-- <a class="fancybox" href="#pop-telecom-five" title=""> -->
              <div class="point p5" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text to r">
                  <p><strong>Internet băng rộng</strong></p>
                  <p> <a target="_blank" href="http://www.fpt.vn/san-pham/adsl-9.html" title="ADSL">ADSL</a><br>
                    <a target="_blank" href="http://www.fpt.vn/san-pham/ftth-2.html" title="FTTH">FTTH</a><br>
                  </p>
                </div>
              </div>
            </li>
            <li class="sl3 swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1349px; opacity: 1; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;"> <img class="bg change-src" data-change-src="images/f2-3.png" src="images/f2-3.png" alt=""> 
              <!-- <a target="_blank" href="http://fptshop.com.vn/apple" title="Sản phẩm Apple"> --> 
              <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#apple" title="Sản phẩm Apple">
              <div class="point p1" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Sản phẩm Apple</strong></p>
                </div>
              </div>
              </a> <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-xach-tay" title="Máy tính xách tay">
              <div class="point p2" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Máy tính xách tay</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-prod-three" title=""> --> 
              <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#dien-thoai" title="Điện thoại">
              <div class="point p3" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text bt r">
                  <p><strong>Điện thoại</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-prod-four" title=""> --> 
              <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-bang" title="">
              <div class="point p4" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text ri r">
                  <p><strong>Máy tính bảng</strong></p>
                </div>
              </div>
              </a> <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-de-ban" title="Máy tính để bàn">
              <div class="point p5" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Máy tính để bàn</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-prod-six" title=""> --> 
              <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phu-kien" title="">
              <div class="point p6" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Phụ kiện </strong></p>
                </div>
              </div>
              </a> <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-chu" title="Máy chủ">
              <div class="point p7" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Máy chủ</strong></p>
                </div>
              </div>
              </a> <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#linh-kien-thiet-bi-mang" title="Linh kiện &ndash; Thiết bị mạng

">
              <div class="point p8" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Linh kiện &ndash; Thiết bị mạng </strong></p>
                </div>
              </div>
              </a> <a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phan-mem-ban-quyen" title="Phần mềm bản quyền">
              <div class="point p9" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text bt r">
                  <p><strong>Phần mềm bản quyền </strong></p>
                </div>
              </div>
              </a> </li>
            <li class="sl4 swiper-slide swiper-slide-next" style="width: 1349px; opacity: 0; transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms;"> <img class="bg change-src" data-change-src="images/f2-4x.png" src="images/f2-4x.png" alt=""> 
              <!-- <a class="fancybox" href="#pop-edu-one" title=""> --> 
              <a target="_blank" href="http://www.poly.edu.vn/" title="" class="a-cd-p1">
              <div class="point p1 cd-p1" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r text-cd">
                  <p><strong>Cao đẳng</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-edu-two" title=""> --> 
              <a target="_blank" href="http://nano.edu.vn/" title="" class="a-dtccqt-p2">
              <div class="point p2 dtccqt-p2" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text to r" style="width: 71px;margin-left: -28px;">
                  <p><strong>Đào tạo chứng chỉ quốc tế</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-edu-three" title=""> --> 
              <!-- <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/giao-duc#sinh-vien-quoc-te" title=""> --> 
              <a target="_blank" href="http://fsb.edu.vn/" title="" class="a-dtdn-p3">
              <div class="point p3 dtdn-p3" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r" style="width: 71px;margin-left: -28px;">
                  <p><strong>Đào tạo cho doanh nghiệp</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-edu-four" title=""> --> 
              <a target="_blank" href="https://www.funix.edu.vn/" title="" class="a-dhtt-p4">
              <div class="point p4 dhtt-p4" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r" style="width: 71px;margin-left: -28px;">
                  <p><strong>Đại học trực tuyến</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-edu-five" title=""> --> 
              <a target="_blank" href="http://thpt.fpt.edu.vn/" title="" class="a-ptth-p5">
              <div class="point p5 ptth-p5" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Phổ thông
                    trung học</strong></p>
                </div>
              </div>
              </a> 
              <!-- <a class="fancybox" href="#pop-edu-six" title=""> --> 
              <a target="_blank" href="http://daihoc.fpt.edu.vn/" title="" class="a-dh-p6">
              <div class="point p6 dh-p6" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r text-cd">
                  <p><strong>Đại học</strong></p>
                </div>
              </div>
              </a> <a target="_blank" href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/giao-duc" title="" class="a-tdsvqt-p6">
              <div class="point p6 tdsvqt-p6" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                <div class="text to r" style="width: 71px;margin-left: -28px;">
                  <p><strong>Trao đổi sinh viên quốc tế </strong></p>
                </div>
              </div>
              </a> <a target="_blank" href="http://international.fpt.edu.vn/" title="" class="a-ptsvqt-p6">
              <div class="point p6 ptsvqt-p6" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r">
                  <p><strong>Phát triển 
                    sinh viên 
                    quốc tế</strong></p>
                </div>
              </div>
              </a> <a target="_blank" href="http://thacsy.fpt.edu.vn/" title="" class="a-ts-p6">
              <div class="point p6 ts-p6" style="opacity: 1;">
                <div class="sd"></div>
                <img class="p-img" src="images/point.png" alt="">
                <div class="text to r text-cd">
                  <p><strong>Sau đại học</strong></p>
                </div>
              </div>
              </a> </li>
          </ul>
          <div class="frame-footer-link">
            <table>
              <tbody>
                <tr>
                  <td><div class="wr-page">
                      <p class="t1 f-dax">Chúng tôi cung cấp giải pháp CNTT tổng thể bao gồm</p>
                      <p class="t2 f-dax-b">Hạ tầng - Thiết bị - Phần mềm - Dịch vụ</p>
                      <div class="swiper-pagination-f2 swiper-pagination-clickable"><span class="swiper-pagination-bullet first-sl">Nội Thất</span><span class="swiper-pagination-bullet swiper-pagination-bullet-active">Công Nghệ qqq</span><span class="swiper-pagination-bullet">Công Trình</span><span class="swiper-pagination-bullet last-sl">Vật Liệu XD</span></div>
                    </div></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="frame-footer"> </div>
      </div>
      <div class="frame-screen frame3" style="height: 600px;">
        <div class="wr-canvas img-f3"> <img class="vi change-src" src="images/f3_vi.png" alt=""> </div>
        <div class="gr-btn-h"> <a href="https://fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" class="btn-home">Tìm hiểu thêm</a> </div>
        <div class="frame-footer">
          <p class="f-dax-b t1">Làn sóng công nghệ mới &amp; 
            Định hướng của C.ty TNHH PTCNKTTH TRUNG HUY</p>
        </div>
      </div>
      <div class="frame-screen frame4" style="height: 600px;">
        <div class="frame-footer">
          <div>
            <p class="t1">Chúng tôi luôn chào đón các ứng viên có hoài bão, mong muốn
              làm việc trong môi trường năng động &amp; sáng tạo</p>
            <p class="f-dax-b t2">Hãy cùng chúng tôi kiến tạo tương lai</p>
          </div>
        </div>
        <div class="img-bg wr-canvas"> <img src="images/fptf4.jpg" alt="">
          <div class="it-1 ani-fpt in-view" data-timeout="100"><img class="change-src" data-change-src="/Content/home/images/canvas/cv-20.png" src="images/cv-20.png" alt=""></div>
          <div class="it-2 ani-fpt in-view" data-timeout="200"><img class="change-src" data-change-src="/Content/home/images/canvas/cv-21.png" src="images/cv-21.png" alt=""></div>
          <div class="it-3 ani-fpt in-view" data-timeout="300"><img class="change-src" data-change-src="/Content/home/images/canvas/cv-22.png" src="images/cv-22.png" alt=""></div>
        </div>
        <div class="gr-btn-h"> <a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep" class="btn-home">Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY</a> </div>
      </div>
    </div>
    
    <!-- Mobile -->
    <div class="content-mb mbv">
      <div class="banner-mb">
        <div class="swiper-mobile">
          <div class="swiper-wrapper">
            <div class="swiper-slide mb-slider1"> <img class="mb-slide-tablet" src="" data-src="images/768_ta.jpg" alt="" title="" /> <img class="mb-slide-mb" src="" data-src="images/320_TA.jpg" alt="" title="" /> </div>
            <div class="swiper-slide mb-slider2"> <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-to-chuc-dua-xe-khong-nguoi-lai" title="" target="_blank"> <img class="mb-slide-tablet" src="" alt="" data-src="images/Cuoc-dua-so-TV-Tablet.jpg" title="" /> <img class="mb-slide-mb" src="" data-src="images/Cuoc-dua-so-TV-Mobile.jpg" alt="" title="" /> </a> </div>
            <div class="swiper-slide mb-slider3"> <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-nhat-ban-can-moc-doanh-thu-100-trieu-usd" title="" target="_blank"> <img class="mb-slide-tablet" src="" alt="" data-src="/Images/files/899-x-768_TV(1).jpg" title="" /> <img class="mb-slide-mb" src="" data-src="images/320-x-606_TV(1).jpg" alt="" title="" /> </a> </div>
            <div class="swiper-slide mb-slider4"> <a href="https://fpt.com.vn/vi/ve-fpt" title="" target="_blank"> <img class="mb-slide-tablet" src="" alt="" data-src="images/tablet-banner1-opt.jpg" title="" /> <img class="mb-slide-mb" src="" data-src="images/banner-mobile-1.jpg" alt="" title="" /> </a> </div>
          </div>
          
          <!-- btn control --> 
          <!-- <div class="swiper-mobile-pagination"></div> -->
          
          <div class="swiper-mobile-next"></div>
          <div class="swiper-mobile-prev"></div>
        </div>
      </div>
      <div class="infographic-mb">
        <div class="swiper-frame-mb">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="col1">
                <table class="tb100">
                  <tbody>
                    <tr>
                      <td><div class="wrap-mb"> <img class="" src="images/ico1.png" alt="" />
                          <div class="text">
                            <p class="t1 f-dax">Doanh thu 2015</p>
                            <p class="t2 avb">40.003</p>
                            <p class="t3 f-dax-b">tỷ đồng</p>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="col2">
                <table class="tb100">
                  <tbody>
                    <tr>
                      <td><div class="wrap-mb"> <img class="" src="images/ico2.png" alt="" />
                          <div class="text ">
                            <p class="t1 f-dax">Giá trị vốn hóa</p>
                            <p class="t2 avb">19.197</p>
                            <p class="t3 f-dax-b">tỷ đồng</p>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="col3">
                <table class="tb100">
                  <tbody>
                    <tr>
                      <td><div class="wrap-mb"> <img class="" src="images/ico3.png" alt="" />
                          <div class="text ">
                            <p class="t1 f-dax">Quy mô nhân sự</p>
                            <p class="t2 avb">26.800<sup>+</sup></p>
                            <p class="t3 f-dax-b">người</p>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="col4">
                <table class="tb100">
                  <tbody>
                    <tr>
                      <td><div class="wrap-mb"> <img class="" src="images/ico4.png" alt="" />
                          <div class="text ">
                            <p class="t1 f-dax">Hiện diện tại</p>
                            <p class="t2 avb">19</p>
                            <p class="t3 f-dax-b">quốc gia</p>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="col5">
                <table class="tb100">
                  <tbody>
                    <tr>
                      <td><div class="wrap-mb"> <img class="" src="images/ico5.png" alt="" />
                          <div class="text lvkd">
                            <p class="t1"><span class="avb">04</span></p>
                            <p class="t2">lĩnh vực</p>
                            <p class="t2">kinh doanh</p>
                            <p class="t3">cốt lõi</p>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="news-mb">
        <div class="wrap-mb">
          <div class="tt f-dax-b">Tin tức</div>
          <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//violympic-chinh-thuc-mo-vong-thi-cap-truong" title="ViOlympic ch&#237;nh thức mở v&#242;ng thi cấp trường">ViOlympic ch&#237;nh thức mở v&#242;ng thi cấp trường</a> <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" title="Với hơn 200 chứng chỉ C.ty TNHH PTCNKTTH TRUNG HUY Software được chứng nhận đặc biệt từ AWS ">Với hơn 200 chứng chỉ C.ty TNHH PTCNKTTH TRUNG HUY Software được chứng nhận đặc biệt từ AWS </a> <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//fpt-software-phat-trien-ung-dung-nhac-so-cho-doi-tac-tai-philippines" title="C.ty TNHH PTCNKTTH TRUNG HUY Software ph&#225;t triển ứng dụng nhạc số cho đối t&#225;c tại Philippines ">C.ty TNHH PTCNKTTH TRUNG HUY Software ph&#225;t triển ứng dụng nhạc số cho đối t&#225;c tại Philippines </a> </div>
      </div>
      <div class="home-solution-mb">
        <div class="wrap-mb">
          <p class="top-solution">Chúng tôi cung cấp giải pháp CNTT<br/>
            tổng thể bao gồm</p>
          <p class="bot-solution f-dax-b">Hạ tầng - Thiết bị<br/>
            Phần mềm - Dịch vụ</p>
        </div>
      </div>
      <div class="solution-slide-mb">
        <div class="swiper-solution-mb">
          <div class="swiper-wrapper">
            <div class="swiper-slide"> <a href="javascript:void(0);" title="">
              <table class="tb100">
                <tbody>
                  <tr>
                    <td><p class="tt">C&#244;ng nghệ</p></td>
                  </tr>
                </tbody>
              </table>
              <img class="change-src" data-change-src="images/img-cn1.jpg" src="" alt="" title="" /> </a> </div>
            <div class="swiper-slide"> <a href="javascript:void(0);" title="">
              <table class="tb100">
                <tbody>
                  <tr>
                    <td><p class="tt">Viễn th&#244;ng</p></td>
                  </tr>
                </tbody>
              </table>
              <img class="change-src" data-change-src="images/img-cn2.jpg" alt="" title="" /> </a> </div>
            <div class="swiper-slide"> <a href="javascript:void(0);" title="">
              <table class="tb100">
                <tbody>
                  <tr>
                    <td><p class="tt">Ph&#226;n phối v&#224; b&#225;n lẻ sản phẩm c&#244;ng nghệ</p></td>
                  </tr>
                </tbody>
              </table>
              <img class="change-src" data-change-src="images/img-cn3.jpg" src="" alt="" title="" /> </a> </div>
            <div class="swiper-slide"> <a href="javascript:void(0);" title="">
              <table class="tb100">
                <tbody>
                  <tr>
                    <td><p class="tt">Gi&#225;o dục</p></td>
                  </tr>
                </tbody>
              </table>
              <img class="change-src" data-change-src="images/img-cn4.jpg" alt="" title="" /> </a> </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="solution-tab-mb-all">
        <div class="solution-tab-mb">
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="javascript: void(0);" title="">Sản phẩm</a><span class="icon"></span></div>
                <div class="sub-solution-item">
                  <div class="wrap-mb"> <a target="_blank" href="http://www.fis.com.vn/san-pham/fptehospital">C.ty TNHH PTCNKTTH TRUNG HUY.eHospital<span class="icon"></span></a> <a target="_blank" href="http://www.fis.com.vn/san-pham/fptegov">C.ty TNHH PTCNKTTH TRUNG HUY.eGov<span class="icon"></span></a> <a target="_blank" href="javascript: void(0);">eMobiz<span class="icon"></span></a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/giai-phap-theo-nganh" title="">Giải ph&#225;p theo ng&#224;nh</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/dich-vu-cong-nghe-thong-tin" title="">Dịch vụ</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="solution-tab-mb">
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong#kenh-thue-rieng" target="_blank" title="">K&#234;nh thu&#234; ri&#234;ng</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong#trung-tam-du-lieu" title="">Trung t&#226;m dữ liệu</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="javascript: void(0);" title="">Dịch vụ trực tuyến</a><span class="icon"></span></div>
                <div class="sub-solution-item">
                  <div class="wrap-mb"> <a target="_blank" href="http://vnexpress.net/" title="Online media">Online media<span class="icon"></span></a> <a target="_blank" href="https://www.sendo.vn/" title=" E-commerce"> E-commerce<span class="icon"></span></a> <a target="_blank" href="https://www.fshare.vn/" title="Fshare">Fshare<span class="icon"></span></a> <a target="_blank" href="http://fsend.vn/" title="Fsend">Fsend<span class="icon"></span></a> <a target="_blank" href="https://fptplay.net/" title="C.ty TNHH PTCNKTTH TRUNG HUY Play">C.ty TNHH PTCNKTTH TRUNG HUY Play<span class="icon"></span></a> <a target="_blank" href="http://fptplay.tv/" title="C.ty TNHH PTCNKTTH TRUNG HUY Playbox">C.ty TNHH PTCNKTTH TRUNG HUY Playbox<span class="icon"></span></a> <a target="_blank" href="http://mix166.com/" title="Mix166">Mix166<span class="icon"></span></a> <a target="_blank" href="http://startalk.vn/" title="Startalk">Startalk<span class="icon"></span></a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"> <a href="javascript: void(0);" title="">Dịch vụ truyền h&#236;nh</a><span class="icon"></span> </div>
                <div class="sub-solution-item">
                  <div class="wrap-mb"> <a target="_blank" href="http://fpt.vn/san-pham/truyen-hinh-fpt-4.html" title="HD Box">HD Box<span class="icon"></span></a> <a target="_blank" href="http://www.onetv.vn/" title="One TV">One TV<span class="icon"></span></a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"> <a href="javascript: void(0);" title="">Internet băng rộng</a><span class="icon"></span> </div>
                <div class="sub-solution-item">
                  <div class="wrap-mb"> <a target="_blank" href="http://www.fpt.vn/adsl/adsl-9.html" title="ADSL">ADSL<span class="icon"></span></a> <a target="_blank" href="http://www.fpt.vn/san-pham/ftth-2.html" title="FTTH ">FTTH<span class="icon"></span></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="solution-tab-mb">
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#dien-thoai" title="">Điện thoại</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-bang" title="">M&#225;y t&#237;nh bảng</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-xach-tay" title="">M&#225;y t&#237;nh x&#225;ch tay</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-de-ban" title="">M&#225;y t&#237;nh để b&#224;n</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-chu" title="">M&#225;y chủ</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#linh-kien-thiet-bi-mang" title="">Linh kiện – Thiết bị mạng </a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phu-kien" title="">Phụ kiện</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phan-mem-ban-quyen" title="">Phần mềm bản quyền</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#apple" title="">Apple</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="solution-tab-mb">
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="http://thpt.fpt.edu.vn/" title="">Phổ th&#244;ng trung học</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="http://www.poly.edu.vn/" title="">Cao đẳng</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href=" http://daihoc.fpt.edu.vn/" title="">Đại học</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="http://fsb.edu.vn/" title="">Sau đại học</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="http://international.fpt.edu.vn/" title="">Ph&#225;t triển sinh vi&#234;n quốc tế</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
          <div class="solution-item-mb">
            <div class="tt">
              <div class="title-solution-item">
                <div class="wrap-mb"><a target="_blank" href="http://greenwich.fpt.edu.vn/" title="">Li&#234;n kết
                  quốc tế</a><span class="icon"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tectonic-mb f-dax-b">
        <div class="wr-page">
          <p class="f-dax-b">Làn sóng công nghệ mới &amp; 
            Định hướng của C.ty TNHH PTCNKTTH TRUNG HUY</p>
        </div>
      </div>
      <div class="smac-mb">
        <div class="wr-page"> <a class="img" href="https://www.fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe"><img class="change-src" data-change-src="images/f3.png?w=979&h=716&mode=crop&scale=both&colors=50" src="images/f3.png?w=979&h=716&mode=crop&scale=both&colors=50" alt="" title="" /></a> <a class="more-home-mb f-dax" href="https://www.fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" title="">T&#236;m hiểu th&#234;m</a> </div>
      </div>
      <div class="join-ft">
        <p>Chúng tôi luôn chào đón các ứng viên có hoài bão, mong muốn làm việc trong môi trường năng động &amp; sáng tạo</p>
        <p>Hãy cùng chúng tôi kiến tạo tương lai</p>
      </div>
      <div class="fpt-mb">
        <div class="wr-page"> <img src="images/fpt-mb.png" alt="" title="" /> </div>
        <a class="more-home-mb" href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep" title="Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY">Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY</a> </div>
    </div>
    <!-- Mobile --> 
    <script>
    (function () {
        var h_ = $(window).height();
        var h_frame = h_;

        if (h_ >= 600 && h_ <= 1080) {
            $(".frame-screen").each(function () {
                var $this = $(this);
                if ($this.hasClass("frame1")) {
                    $this.height(h_ - 51);
                } else {
                    $this.height(h_);
                }
            })
        } else if (h_ < 600) {
            h_frame = 600;
            $(".frame-screen").height(600);
        } else if (h_ > 1080) {
            h_frame = 1080;
            $(".frame-screen").height(1080);
        }

        var h_scrol = $(window).height();
        var scrt = $(window).scrollTop();
        if (scrt > (h_frame - 50) && scrt < (h_frame + 150)) {
            $(".swiper-f2 .swiper-slide .point").stop().animate({ opacity: 1 });
        }
        $(window).scroll(function () {
            scrt = $(window).scrollTop();
            if (scrt > (h_frame - 50) && scrt < (h_frame + 150)) {
                $(".swiper-f2 .swiper-slide .point").stop().animate({ opacity: 1 });
            }
        })

    })()
    $(window).load(function () {

    })
    // this.home_height = function(){

    //        var h_frame = h_;

    //        if(h_>=600 && h_<=1080){
    //            $(".frame-screen").each(function(){
    //                var $this = $(this);
    //                if($this.hasClass("frame1")){
    //                    $this.height(h_-51);
    //                }else{
    //                    $this.height(h_);
    //                }
    //            })
    //        }else if(h_<600){
    //            h_frame = 600;
    //            $(".frame-screen").height(600);
    //        }else if(h_>1080){
    //            h_frame = 1080;
    //            $(".frame-screen").height(1080);
    //        }

    //        var h_scrol = $(window).height();
    //        var scrt = $(window).scrollTop();
    //        if(scrt>(h_frame-50) && scrt<(h_frame+150)){
    //            $(".swiper-f2 .swiper-slide .point").stop().animate({opacity: 1});
    //        }
    //        $(window).scroll(function(){
    //            scrt = $(window).scrollTop();
    //            if(scrt>(h_frame-50) && scrt<(h_frame+150)){
    //                $(".swiper-f2 .swiper-slide .point").stop().animate({opacity: 1});
    //            }
    //        })
    //    }
</script> 
  </div>
  <a href="javascript: void(0);" class="click-top-scroll"> <img class="top-scroll" src="images/top.png" alt="" /> </a>
  <div id="footer"> 
    <!-- <div class="share pa">
			<a href="https://www.facebook.com/fptcorp" target="_blank" title="" class="ic-fb"></a><a href="https://www.youtube.com/user/onetvfpt" target="_blank" title="" class="ic-ytb"></a> --> 
    <!-- <a href="javascript: void(0);" title="" class="ic-tw"></a><a href="javascript: void(0);" title="" class="ic-in"></a> --> 
    <!-- </div> --> 
    <!-- <div class="ft-main"> -->
    <div class="wr-page">
      <div class="mn-ft pr">
        <div class="box-it">
          <div class="tt"><a href="https://fpt.com.vn/vi/ve-fpt" class="" title="">Về C.ty TNHH PTCNKTTH TRUNG HUY </a><span class="ic-arrow"></span></div>
          <div class="list-sub clearfix">
            <div class="f-ftmn left">
              <div><a href="https://fpt.com.vn/vi/ve-fpt/lich-su" class="" title="Lịch sử">Lịch sử</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/van-hoa" class="" title="Văn hóa">Văn hóa</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" class="" title="Định hướng công nghệ">Định hướng công nghệ</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/mang-luoi-toan-cau" class="" title="Mạng lưới toàn cầu">Mạng lưới toàn cầu</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/cong-ty-thanh-vien" class="" title="Công ty thành viên">Công ty thành viên</a></div>
            </div>
            <div class="f-ftmn left">
              <div><a href="https://fpt.com.vn/vi/ve-fpt/doi-ngu-lanh-dao" class="" title="Đội ngũ lãnh đạo">Đội ngũ lãnh đạo</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/trach-nhiem-xa-hoi" class="" title="Trách nhiệm xã hội">Trách nhiệm xã hội</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/giai-thuong" class="" title="Giải thưởng">Giải thưởng</a></div>
              <div><a href="https://fpt.com.vn/vi/ve-fpt/doi-tac" class="" title="Đối tác">Đối tác</a></div>
              <!-- <div><a href="https://fpt.com.vn/vi/ve-fpt/thu-vien" class="" title="Thư viện ảnh &amp; Video">Thư viện ảnh &amp; Video</a></div> --> 
              
            </div>
            <!-- <div><a href="https://fpt.com.vn/vi/ve-fpt/thu-vien" class="" title="">Thư viện ảnh & Video</a></div> --> 
          </div>
        </div>
        <div class="box-it">
          <div class="tt"><a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh" class="" title="Lĩnh vực kinh doanh">Lĩnh vực kinh doanh </a><span class="ic-arrow"></span></div>
          <div class="list-sub">
            <div><a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh#cong-nghe" class="" title="Công nghệ">Công nghệ</a></div>
            <div><a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong" class="" title="Viễn thông">Viễn thông</a></div>
            <div><a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin" class="" title="Phân phối &amp; bán lẻ 
sản phẩm công nghệ">Phân phối &amp; bán lẻ 
              sản phẩm công nghệ</a></div>
            <div><a href="https://fpt.com.vn/vi/linh-vuc-kinh-doanh/giao-duc" class="" title="">Giáo dục</a></div>
          </div>
        </div>
        <div class="box-it">
          <div class="tt"><a href="https://fpt.com.vn/vi/tin-tuc" class="" title="">Tin tức </a><span class="ic-arrow"></span></div>
          <div class="list-sub">
            <div><a href="https://fpt.com.vn/vi/tin-tuc/thong-cao-bao-chi" class="">Thông cáo
              báo chí</a></div>
            <div><a href="https://fpt.com.vn/vi/tin-tuc/hoat-dong-su-kien" class="">Hoạt động
              sự kiện</a></div>
            <div><a href="https://fpt.com.vn/vi/tin-tuc/cau-chuyen-du-an" class="">Câu chuyện 
              dự án</a></div>
          </div>
        </div>
        <div class="box-it">
          <div class="tt"><a target="_blank" href="https://fpt.com.vn/vi/nhadautu" title="" class="">Quan hệ nhà đầu tư </a><span class="ic-arrow"></span></div>
          <div class="list-sub">
            <div><a href="https://fpt.com.vn/vi/nhadautu/thong-tin-tai-chinh/tong-quan-tinh-hinh-tai-chinh" class="">Thông tin tài chính</a></div>
            <div><a href="https://fpt.com.vn/vi/nhadautu/cong-bo-thong-tin" class="" title="">Công bố thông tin</a></div>
            <div><a href="https://fpt.com.vn/vi/nhadautu/thong-tin-dau-tu/gia-co-phieu" class="">Thông tin đầu tư</a></div>
            <div><a href="https://fpt.com.vn/vi/nhadautu/quan-tri-cong-ty/ban-lanh-dao-cong-ty/hoi-dong-quan-tri" class="">Quản trị công ty</a></div>
            <div><a href="https://fpt.com.vn/vi/nhadautu/tin-tuc-nha-dau-tu" class="">Tin tức cho nhà đầu tư</a></div>
          </div>
        </div>
        <div class="box-it last">
          <div class="tt"><a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep" class="" title="">Cơ hội nghề nghiệp </a><span class="ic-arrow"></span></div>
          <div class="list-sub">
            <div><a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep/cuoc-song-tai-fpt" class="" title="">Cuộc sống tại C.ty TNHH PTCNKTTH TRUNG HUY</a></div>
            <div><a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep/dinh-huong-nghe-nghiep" class="" title="">Định hướng nghề nghiệp</a></div>
            <div><a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep/chinh-sach-cho-nguoi-lao-dong" class="" title="">Chính sách cho người lao động</a></div>
            <div><a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep/quy-trinh-tuyen-dung" class="" title="">Quy trình tuyển dụng</a></div>
            <div><a href="https://tuyendung.fpt.com.vn/" class="" title="">Tìm kiếm cơ hội tại C.ty TNHH PTCNKTTH TRUNG HUY</a></div>
          </div>
        </div>
        <div class="logo pa"><a href="https://fpt.com.vn/vi/" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
        <div class="clear"></div>
      </div>
      <div class="link"> <a href="https://www.facebook.com/fptcorp" target="_blank" class="share ic-fb">&nbsp;</a><a target="_blank" href="https://www.youtube.com/user/onetvfpt" class="share ic-ytb">&nbsp;</a><a target="_blank" href="https://fpt.com.vn/vi/dieu-khoan-su-dung" class="" title="">Điều khoản sử dụng</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank" href="https://fpt.com.vn/vi/so-do-website" class="" title="">Sơ đồ website</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://fpt.com.vn/vi/lien-he" class="" title="">Liên hệ &amp; Trợ giúp</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://fpt.com.vn/vi/resources?file=%2Fimages%2Ffiles%2Fthuong-hieu.pdf" title="" target="_blank">Thương hiệu</a> </div>
      <div class="bottom-ft-mb"> <a href="https://www.facebook.com/fptcorp" target="_blank" class="share ic-fb">&nbsp;</a><a href="https://www.youtube.com/user/onetvfpt" target="_blank" class="share ic-ytb">&nbsp;</a>
        <div class="logo pa"><a href="https://fpt.com.vn/vi/" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
      </div>
    </div>
  </div>
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