<?php
    $d->reset();
    $sql_list ="select *    from #_product_list order by stt asc limit 0,5";
    $d->query($sql_list);
    $list =$d->result_array();
    
    $d->reset();
    $sql_tin_l ="select * from #_tinloai1_1_list order by stt asc limit 0,3";
    $d->query($sql_tin_l);
    $tin_l=$d->result_array();
    
    $d->reset();
    $sql_slider = "select tenkhongdau,id,ten,photo,link from #_slideshow where hienthi = 1 and loai = 1 order by stt asc";
    $d->query($sql_slider);
    $result_slider=$d->result_array();
    
    $d->reset();
    $sql_slider_content = "select tenkhongdau,id,ten,photo,link from #_slideshow where hienthi = 1 and loai = 2 order by stt asc";
    $d->query($sql_slider_content);
    $result_slider_content=$d->result_array();

    $d->reset();
    $sql_slider_footer = "select tenkhongdau,id,ten,photo,link from #_slideshow where hienthi = 1 and loai = 3 order by stt asc";
    $d->query($sql_slider_footer);
    $result_slider_footer=$d->result_array();

    $ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<div id="content">
            <script type="text/javascript">
                $(window).load(function () {
                    setTimeout(function () {
                        $("#header").stop().animate({ top: 0 });
                    }, 3000);
                })
            </script>


            <div class="wrap pcv">
                <div class="frame-screen frame1">
                    <div class="swiper-container swiper-f1 swiper-container-horizontal swiper-container-fade" id="fr1-homebanner" style="opacity: 1;">
                        <div class="swiper-wrapper" style="transition-duration: 300ms;">
                            <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ ?>
                            <a href="noi-dung-gioi-thieu/<?=$result_slider[$i]["tenkhongdau"]?>-<?=$result_slider[$i]["id"]?>.html" title="">
                                <div class="swiper-slide slider-home1 slider-home swiper-slide-prev" data-src="<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>" style="width: 1349px; transform: translate3d(0px, 0px, 0px); transition-duration: 300ms; opacity: 1; background-image: url(&quot;<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>&quot;);" data-swiper-slide-index="<?=$i?>">
                                </div>  </a>
                            <?php } ?>  
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
                                                        <td>
                                                            <table class="fix-as">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img class="left" src="images/ico1.png" alt=""></td>
                                                                        <td>
                                                                            <div class="text left">
                                                                                <p class="t1 f-dax">Doanh thu 2015</p><p class="t2 avb">40.003</p><p class="t3">tỷ VND</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
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
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img class="left" src="images/ico2.png" alt=""></td>
                                                                        <td>
                                                                            <div class="text left">
                                                                                <p class="t1 f-dax">Giá trị vốn hóa</p><p class="t2 avb">19.197<sup>+</sup></p><p class="t3">tỷ VND</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
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
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img class="left" src="images/ico3.png" alt=""></td>
                                                                        <td>
                                                                            <div class="text left">
                                                                                <p class="t1 f-dax">Quy mô nhân sự</p><p class="t2 avb">27.900<sup>+</sup></p><p class="t3">người</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
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
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img class="left" src="images/ico4.png" alt="">
                                                                        </td>
                                                                        <td>
                                                                            <div class="text left">
                                                                                <p class="t1 f-dax">Hiện diện</p><p class="t2 avb">20<!--20--> <span style="font-size:14px;">tại</span></p><p class="t3">quốc gia</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
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
                                                        <td>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img class="left" src="images/ico5.png" alt="">
                                                                        </td>
                                                                        <td>
                                                                            <div class="text left">
                                                                                <p class="t1"><span class="avb">04</span></p>
                                                                                <p class="t2">lĩnh vực</p>
                                                                                <p class="t2">kinh doanh</p>
                                                                                <p class="t3">cốt lõi</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
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





                                            <li class="news-animate r ">
                                                <a href="chi-tiet.html" title="Bát Tràng: Thổi hồn xưa gạch Việt">Bát Tràng: Thổi hồn xưa gạch Việt</a>
                                            </li>
                                            <li class="news-animate r hide-mb">
                                                <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/loi-nhuan-sau-thue-11-thang-tang-9-so-voi-cung-ky" title="Lợi nhuận sau thuế 11 tháng tăng 9% so với cùng kỳ ">Lợi nhuận sau thuế 11 tháng tăng 9% so với cùng kỳ </a>
                                            </li>
                                            <li class="news-animate r hide-mb">
                                                <a href="#" title="AHNĐ-MDOT023">AHNĐ-MDOT023</a>
                                            </li>
                                            <li class="news-animate r ">
                                                <a href="#" title="Loại vật liệu này giờ đây đang bị mai một dần vì những nghệ nhân Bát Tràng không còn đốt lò như xưa.">Loại vật liệu này giờ đây đang bị mai một dần vì những nghệ nhân Bát Tràng không còn đốt lò như xưa.</a>
                                            </li>
                                            <li class="news-animate r ">
                                                <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" title="Với hơn 200 chứng chỉ FPT Software được chứng nhận đặc biệt từ AWS ">Với hơn 200 chứng chỉ FPT Software được chứng nhận đặc biệt từ AWS </a>
                                            </li>
                                            <li class="news-animate r ">
                                                <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-software-phat-trien-ung-dung-nhac-so-cho-doi-tac-tai-philippines" title="FPT Software phát triển ứng dụng nhạc số cho đối tác tại Philippines ">FPT Software phát triển ứng dụng nhạc số cho đối tác tại Philippines </a>
                                            </li>
                                        </ul><span class="tickeroverlay-left">&nbsp;</span><span class="tickeroverlay-right">&nbsp;</span>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="frame-screen frame2">
                    <div class="swiper-f2 swiper-container-horizontal swiper-container-fade">
                        <ul class="slider-f2 swiper-wrapper" style="transition-duration: 0ms;">
                            <li class="sl1 swiper-slide" style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                                <!--Begin-->
                                <!-- We will make a simple accordian with hover effects
                                The markup will have a list with images and the titles-->
                                <div class="accordian">
                                    <ul>
                                    <?php  for($i=0,$count_result_slider=count($result_slider_content);$i<$count_result_slider;$i++){ ?>
                                        <li>
                                            <div class="image_title">
                                                <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title=""><?= $result_slider_content[$i]['ten'] ?></a>
                                            </div>
                                            <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title="">
                                                <img src="<?= _upload_slideshow_l.$result_slider_content[$i]['photo'] ?>"/>
                                            </a>
                                        </li>
                                    <?php } ?> 
                                    </ul>
                                </div>
                                <!--End-->
                            </li>
                            <li class="sl2 swiper-slide swiper-slide-prev" style="width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms;">
                                <!--Begin-->
                                <!-- We will make a simple accordian with hover effects
    The markup will have a list with images and the titles-->
                                <div class="accordian">
                                    <ul>
                                    <?php  for($i=0,$count_result_slider=count($result_slider_content);$i<$count_result_slider;$i++){ ?>
                                        <li>
                                            <div class="image_title">
                                                <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title=""><?= $result_slider_content[$i]['ten'] ?></a>
                                            </div>
                                            <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title="">
                                                <img src="<?= _upload_slideshow_l.$result_slider_content[$i]['photo'] ?>"/>
                                            </a>
                                        </li>
                                    <?php } ?> 
                                    </ul>
                                </div>
                                <!--End-->
                            </li>
                            <li class="sl3 swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1349px; opacity: 1; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms;">
                                <!--Begin-->
                                <!-- We will make a simple accordian with hover effects
    The markup will have a list with images and the titles-->
                                <div class="accordian">
                                    <ul>
                                       <?php  for($i=0,$count_result_slider=count($result_slider_content);$i<$count_result_slider;$i++){ ?>
                                        <li>
                                            <div class="image_title">
                                                <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title=""><?= $result_slider_content[$i]['ten'] ?></a>
                                            </div>
                                            <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title="">
                                                <img src="<?= _upload_slideshow_l.$result_slider_content[$i]['photo'] ?>"/>
                                            </a>
                                        </li>
                                    <?php } ?> 
                                    </ul>
                                </div>
                                <!--End-->
                            </li>
                            <li class="sl4 swiper-slide swiper-slide-next" style="width: 1349px; opacity: 0; transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms;">
                                <!--Begin-->
                                <!-- We will make a simple accordian with hover effects
    The markup will have a list with images and the titles-->
                                <div class="accordian">
                                    <ul>
                                        <?php  for($i=0,$count_result_slider=count($result_slider_content);$i<$count_result_slider;$i++){ ?>
                                        <li>
                                            <div class="image_title">
                                                <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title=""><?= $result_slider_content[$i]['ten'] ?></a>
                                            </div>
                                            <a href="noi-dung-gioi-thieu/<?=$result_slider_content[$i]["tenkhongdau"]?>-<?=$result_slider_content[$i]["id"]?>.html" title="">
                                                <img src="<?= _upload_slideshow_l.$result_slider_content[$i]['photo'] ?>"/>
                                            </a>
                                        </li>
                                    <?php } ?> 
                                    </ul>
                                </div>
                                <!--End-->
                            </li>
                        </ul>
                        <div class="frame-footer-link">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="wr-page text-center">
                                                <p class="t1 f-dax">Chúng tôi cung cấp giải pháp CNTT tổng thể bao gồm</p>
                                                <p class="t2 f-dax-b">Hạ tầng - Thiết bị - Phần mềm - Dịch vụ</p>
                                                <div class="swiper-pagination-f2 swiper-pagination-clickable"><span class="swiper-pagination-bullet first-sl">Công nghệ</span><span class="swiper-pagination-bullet swiper-pagination-bullet-active">Viễn thông</span><span class="swiper-pagination-bullet">Phân phối và bán lẻ sản phẩm công nghệ</span><span class="swiper-pagination-bullet last-sl">Giáo dục</span></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="frame-footer">

                    </div>
                </div>
                <div class="frame-screen frame3">
                    <div class="wr-canvas img-f3">
                        <img class="vi change-src" src="images/f3_vi.png" alt="">

                    </div>
                    <div class="gr-btn-h">
                        <a href="https://fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" class="btn-home">Tìm hiểu thêm</a>
                    </div>
                    <div class="frame-footer">
                        <p class="f-dax-b t1">
                            Làn sóng công nghệ mới &amp;
                            Định hướng của C.ty TNHH PTCNKTTH TRUNG HUY
                        </p>
                    </div>
                </div>
                <div class="frame-screen frame4">
                    <div class="frame-footer">
                        <div>
                            <p class="t1">
                                Chúng tôi luôn chào đón các ứng viên có hoài bão, mong muốn
                                làm việc trong môi trường năng động &amp; sáng tạo
                            </p>
                            <p class="f-dax-b t2">Hãy cùng chúng tôi kiến tạo tương lai</p>
                        </div>
                    </div>
                    <div class="img-bg wr-canvas">
                        <img src="images/fptf4.jpg" alt="">
                        <?php  for($i=0,$count_result_slider=count($result_slider_footer);$i<$count_result_slider;$i++){ ?>
                             <div class="it-1 ani-fpt in-view" data-timeout="100"><a href="noi-dung-gioi-thieu/<?=$result_slider_footer[$i]["tenkhongdau"]?>-<?=$result_slider_footer[$i]["id"]?>.html" title=""><img class="change-src" data-change-src="<?= _upload_slideshow_l.$result_slider_footer[$i]['photo'] ?>" src="<?= _upload_slideshow_l.$result_slider_footer[$i]['photo'] ?>" alt="<?= $result_slider_footer[$i]['ten'] ?>"></a></div>
                        <?php } ?> 
                    </div>
                    <div class="gr-btn-h">
                        <a href="https://fpt.com.vn/vi/co-hoi-nghe-nghiep" class="btn-home">Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY</a>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="content-mb mbv">
                <div class="banner-mb">
                    <div class="swiper-mobile">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide mb-slider1">
                                <img class="mb-slide-tablet" src="" data-src="images/768_ta.jpg" alt="" title="" />
                                <img class="mb-slide-mb" src="" data-src="images/320_TA.jpg" alt="" title="" />
                            </div>
                            <div class="swiper-slide mb-slider2">
                                <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-to-chuc-dua-xe-khong-nguoi-lai" title="" target="_blank">
                                    <img class="mb-slide-tablet" src="" alt="" data-src="images/Cuoc-dua-so-TV-Tablet.jpg" title="" />
                                    <img class="mb-slide-mb" src="" data-src="images/Cuoc-dua-so-TV-Mobile.jpg" alt="" title="" />
                                </a>
                            </div>
                            <div class="swiper-slide mb-slider3">
                                <a href="https://fpt.com.vn/vi/tin-tuc/chi-tiet/fpt-nhat-ban-can-moc-doanh-thu-100-trieu-usd" title="" target="_blank">
                                    <img class="mb-slide-tablet" src="" alt="" data-src="/Images/files/899-x-768_TV(1).jpg" title="" />
                                    <img class="mb-slide-mb" src="" data-src="images/320-x-606_TV(1).jpg" alt="" title="" />
                                </a>
                            </div>
                            <div class="swiper-slide mb-slider4">
                                <a href="https://fpt.com.vn/vi/ve-fpt" title="" target="_blank">
                                    <img class="mb-slide-tablet" src="" alt="" data-src="images/tablet-banner1-opt.jpg" title="" />
                                    <img class="mb-slide-mb" src="" data-src="images/banner-mobile-1.jpg" alt="" title="" />
                                </a>
                            </div>
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
                                                <td>
                                                    <div class="wrap-mb">
                                                        <img class="" src="images/ico1.png" alt="" />
                                                        <div class="text">
                                                            <p class="t1 f-dax">Doanh thu 2015</p><p class="t2 avb">40.003</p><p class="t3 f-dax-b">tỷ đồng</p>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <td>
                                                    <div class="wrap-mb">
                                                        <img class="" src="images/ico2.png" alt="" />
                                                        <div class="text ">
                                                            <p class="t1 f-dax">Giá trị vốn hóa</p> <p class="t2 avb">19.197</p>                                                <p class="t3 f-dax-b">tỷ đồng</p>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <td>
                                                    <div class="wrap-mb">
                                                        <img class="" src="images/ico3.png" alt="" />
                                                        <div class="text ">
                                                            <p class="t1 f-dax">Quy mô nhân sự</p><p class="t2 avb">26.800<sup>+</sup></p><p class="t3 f-dax-b">người</p>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <td>
                                                    <div class="wrap-mb">
                                                        <img class="" src="images/ico4.png" alt="" />
                                                        <div class="text ">
                                                            <p class="t1 f-dax">Hiện diện tại</p>
                                                            <p class="t2 avb">19</p>
                                                            <p class="t3 f-dax-b">quốc gia</p>
                                                        </div>
                                                    </div>
                                                </td>
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
                                                <td>
                                                    <div class="wrap-mb">
                                                        <img class="" src="images/ico5.png" alt="" />
                                                        <div class="text lvkd">
                                                            <p class="t1"><span class="avb">04</span></p>
                                                            <p class="t2">lĩnh vực</p>
                                                            <p class="t2">kinh doanh</p>
                                                            <p class="t3">cốt lõi</p>
                                                        </div>
                                                    </div>
                                                </td>
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
                        <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//violympic-chinh-thuc-mo-vong-thi-cap-truong" title="ViOlympic ch&#237;nh thức mở v&#242;ng thi cấp trường">ViOlympic ch&#237;nh thức mở v&#242;ng thi cấp trường</a>
                        <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//voi-hon-200-chung-chi-fpt-software-duoc-chung-nhan-dac-biet-tu-aws" title="Với hơn 200 chứng chỉ C.ty TNHH PTCNKTTH TRUNG HUY Software được chứng nhận đặc biệt từ AWS ">Với hơn 200 chứng chỉ C.ty TNHH PTCNKTTH TRUNG HUY Software được chứng nhận đặc biệt từ AWS </a>
                        <a class="news-mb-it f-dax" href="https://www.fpt.com.vn/vi/tin-tuc//fpt-software-phat-trien-ung-dung-nhac-so-cho-doi-tac-tai-philippines" title="C.ty TNHH PTCNKTTH TRUNG HUY Software ph&#225;t triển ứng dụng nhạc số cho đối t&#225;c tại Philippines ">C.ty TNHH PTCNKTTH TRUNG HUY Software ph&#225;t triển ứng dụng nhạc số cho đối t&#225;c tại Philippines </a>
                    </div>
                </div>
                <div class="home-solution-mb">
                    <div class="wrap-mb">
                        <p class="top-solution">Chúng tôi cung cấp giải pháp CNTT<br />tổng thể bao gồm</p>
                        <p class="bot-solution f-dax-b">Hạ tầng - Thiết bị<br />Phần mềm - Dịch vụ</p>
                    </div>
                </div>
                <div class="solution-slide-mb">
                    <div class="swiper-solution-mb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" title="">
                                    <table class="tb100">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="tt">C&#244;ng nghệ</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <img class="change-src" data-change-src="images/img-cn1.jpg" src="" alt="" title="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" title="">
                                    <table class="tb100">
                                        <tbody>
                                            <tr>
                                                <td><p class="tt">Viễn th&#244;ng</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <img class="change-src" data-change-src="images/img-cn2.jpg" alt="" title="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" title="">
                                    <table class="tb100">
                                        <tbody>
                                            <tr>
                                                <td><p class="tt">Ph&#226;n phối v&#224; b&#225;n lẻ sản phẩm c&#244;ng nghệ</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <img class="change-src" data-change-src="images/img-cn3.jpg" src="" alt="" title="" />
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0);" title="">
                                    <table class="tb100">
                                        <tbody>
                                            <tr>
                                                <td><p class="tt">Gi&#225;o dục</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <img class="change-src" data-change-src="images/img-cn4.jpg" alt="" title="" />
                                </a>
                            </div>
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
                                        <div class="wrap-mb">
                                            <a target="_blank" href="http://www.fis.com.vn/san-pham/fptehospital">C.ty TNHH PTCNKTTH TRUNG HUY.eHospital<span class="icon"></span></a>
                                            <a target="_blank" href="http://www.fis.com.vn/san-pham/fptegov">C.ty TNHH PTCNKTTH TRUNG HUY.eGov<span class="icon"></span></a>
                                            <a target="_blank" href="javascript: void(0);">eMobiz<span class="icon"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/giai-phap-theo-nganh" title="">Giải ph&#225;p theo ng&#224;nh</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/cong-nghe/dich-vu-cong-nghe-thong-tin" title="">Dịch vụ</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="solution-tab-mb">
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/vien-thong#kenh-thue-rieng" target="_blank" title="">K&#234;nh thu&#234; ri&#234;ng</a><span class="icon"></span></div></div>
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
                                        <div class="wrap-mb">
                                            <a target="_blank" href="http://vnexpress.net/" title="Online media">Online media<span class="icon"></span></a>
                                            <a target="_blank" href="https://www.sendo.vn/" title=" E-commerce"> E-commerce<span class="icon"></span></a>
                                            <a target="_blank" href="https://www.fshare.vn/" title="Fshare">Fshare<span class="icon"></span></a>
                                            <a target="_blank" href="http://fsend.vn/" title="Fsend">Fsend<span class="icon"></span></a>
                                            <a target="_blank" href="https://fptplay.net/" title="C.ty TNHH PTCNKTTH TRUNG HUY Play">C.ty TNHH PTCNKTTH TRUNG HUY Play<span class="icon"></span></a>
                                            <a target="_blank" href="http://fptplay.tv/" title="C.ty TNHH PTCNKTTH TRUNG HUY Playbox">C.ty TNHH PTCNKTTH TRUNG HUY Playbox<span class="icon"></span></a>

                                            <a target="_blank" href="http://mix166.com/" title="Mix166">Mix166<span class="icon"></span></a>
                                            <a target="_blank" href="http://startalk.vn/" title="Startalk">Startalk<span class="icon"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item">
                                    <div class="wrap-mb">
                                        <a href="javascript: void(0);" title="">Dịch vụ truyền h&#236;nh</a><span class="icon"></span>
                                    </div>
                                    <div class="sub-solution-item">
                                        <div class="wrap-mb">
                                            <a target="_blank" href="http://fpt.vn/san-pham/truyen-hinh-fpt-4.html" title="HD Box">HD Box<span class="icon"></span></a>
                                            <a target="_blank" href="http://www.onetv.vn/" title="One TV">One TV<span class="icon"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item">
                                    <div class="wrap-mb">
                                        <a href="javascript: void(0);" title="">Internet băng rộng</a><span class="icon"></span>
                                    </div>
                                    <div class="sub-solution-item">
                                        <div class="wrap-mb">
                                            <a target="_blank" href="http://www.fpt.vn/adsl/adsl-9.html" title="ADSL">ADSL<span class="icon"></span></a>
                                            <a target="_blank" href="http://www.fpt.vn/san-pham/ftth-2.html" title="FTTH ">FTTH<span class="icon"></span></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="solution-tab-mb">
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#dien-thoai" title="">Điện thoại</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-bang" title="">M&#225;y t&#237;nh bảng</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-xach-tay" title="">M&#225;y t&#237;nh x&#225;ch tay</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-tinh-de-ban" title="">M&#225;y t&#237;nh để b&#224;n</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#may-chu" title="">M&#225;y chủ</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item">
                                    <div class="wrap-mb">
                                        <a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#linh-kien-thiet-bi-mang" title="">
                                            Linh kiện – Thiết bị mạng

                                        </a><span class="icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phu-kien" title="">Phụ kiện</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#phan-mem-ban-quyen" title="">Phần mềm bản quyền</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a href="https://www.fpt.com.vn/vi/linh-vuc-kinh-doanh/phan-phoi-va-ban-le-san-pham-cong-nghe-thong-tin#apple" title="">Apple</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="solution-tab-mb">
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="http://thpt.fpt.edu.vn/" title="">Phổ th&#244;ng trung học</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="http://www.poly.edu.vn/" title="">Cao đẳng</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href=" http://daihoc.fpt.edu.vn/" title="">Đại học</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="http://fsb.edu.vn/" title="">Sau đại học</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item"><div class="wrap-mb"><a target="_blank" href="http://international.fpt.edu.vn/" title="">Ph&#225;t triển sinh vi&#234;n quốc tế</a><span class="icon"></span></div></div>
                            </div>
                        </div>
                        <div class="solution-item-mb">
                            <div class="tt">
                                <div class="title-solution-item">
                                    <div class="wrap-mb">
                                        <a target="_blank" href="http://greenwich.fpt.edu.vn/" title="">
                                            Li&#234;n kết
                                            quốc tế
                                        </a><span class="icon"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tectonic-mb f-dax-b">
                    <div class="wr-page">
                        <p class="f-dax-b">
                            Làn sóng công nghệ mới &amp;
                            Định hướng của C.ty TNHH PTCNKTTH TRUNG HUY
                        </p>
                    </div>
                </div>
                <div class="smac-mb">
                    <div class="wr-page">
                        <a class="img" href="https://www.fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe"><img class="change-src" data-change-src="images/f3.png?w=979&h=716&mode=crop&scale=both&colors=50" src="images/f3.png?w=979&h=716&mode=crop&scale=both&colors=50" alt="" title="" /></a>
                        <a class="more-home-mb f-dax" href="https://www.fpt.com.vn/vi/ve-fpt/dinh-huong-cong-nghe" title="">T&#236;m hiểu th&#234;m</a>
                    </div>
                </div>
                <div class="join-ft">
                    <p>Chúng tôi luôn chào đón các ứng viên có hoài bão, mong muốn làm việc trong môi trường năng động &amp; sáng tạo</p>
                    <p>Hãy cùng chúng tôi kiến tạo tương lai</p>
                </div>
                <div class="fpt-mb">
                    <div class="wr-page">
                        <img src="images/fpt-mb.png" alt="" title="" />
                    </div>
                    <a class="more-home-mb" href="https://www.fpt.com.vn/vi/co-hoi-nghe-nghiep" title="Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY">Tham gia đội ngũ C.ty TNHH PTCNKTTH TRUNG HUY</a>
                </div>
            </div>
            <!-- Mobile -->
            <script>
                (function () {
                    var h_ = $(window).height();
                    var h_frame = h_;

                    if (h_ >= 350 && h_ <= 350) {
                        $(".frame-screen").each(function () {
                            var $this = $(this);
                            if ($this.hasClass("frame1")) {
                                $this.height(h_ - 51);
                            } else {
                                $this.height(h_);
                            }
                        })
                    } else if (h_ < 350) {
                        h_frame = 350;
                        $(".frame-screen").height(350);
                    } else if (h_ > 350) {
                        h_frame = 350;
                        $(".frame-screen").height(350);
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

                //        if(h_>=350 && h_<=350){
                //            $(".frame-screen").each(function(){
                //                var $this = $(this);
                //                if($this.hasClass("frame1")){
                //                    $this.height(h_-51);
                //                }else{
                //                    $this.height(h_);
                //                }
                //            })
                //        }else if(h_<350){
                //            h_frame = 350;
                //            $(".frame-screen").height(350);
                //        }else if(h_>350){
                //            h_frame = 350;
                //            $(".frame-screen").height(350);
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