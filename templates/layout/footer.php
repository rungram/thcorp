<?php
$d->reset();
$sql_list ="select *  from #_product_list where hienthi = 1 and vitri = 2 order by stt asc limit 5";
$d->query($sql_list);
$list =$d->result_array();

$d->reset();
$sql_face = "select* from #_nhung_face";
$d->query($sql_face);
$result_face=$d->result_array();
?>
<div id="footer">
            <!-- <div class="share pa">
                <a href="https://www.facebook.com/fptcorp" target="_blank" title="" class="ic-fb"></a><a href="https://www.youtube.com/user/onetvfpt" target="_blank" title="" class="ic-ytb"></a> -->
            <!-- <a href="javascript: void(0);" title="" class="ic-tw"></a><a href="javascript: void(0);" title="" class="ic-in"></a> -->
            <!-- </div> -->
            <!-- <div class="ft-main"> -->
            <div class="wr-page">
                <div class="mn-ft pr">
                <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
                ?>
                    <div class="box-it">
                        <div class="tt"><a href="<?=$menutype?>/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html" class="" title=""><?=$list[$i]["ten_vi"]?> </a><span class="ic-arrow"></span></div>
                        <div class="list-sub">
                            <?php
                            $d->reset();
                            $id =  $list[$i]["id"];
                            $sql_tinl="select * from #_product where hienthi =1 and id_list='".$id."' order by id desc limit 5";
                            $d->query($sql_tinl);   
                            $result_tinl=$d->result_array();    
                            ?>
                            <?php for($j=0,$count_tl=count($result_tinl);$j<$count_tl;$j++)
                                { 
                            ?>
                                <div><a href="tin-tuc-detail/<?=$result_tinl[$j]["tenkhongdau"]?>-<?=$result_tinl[$j]["id"]?>.html" class="" title="<?=$result_tinl[$j]["ten_vi"]?>"><?=$result_tinl[$j]["ten_vi"]?></a></div>
                            <?php
                                }
                            ?>
                            <!-- <div><a href="https://fpt.com.vn/vi/ve-fpt/thu-vien" class="" title="">Thư viện ảnh & Video</a></div> -->
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="logo pa"><a href="https://fpt.com.vn/vi/" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
                    <div class="clear"></div>
                </div>
                <div class="link">
                    <a href="//<?=$result_face[0]['facebook']?>" target="_blank" class="share ic-fb">&nbsp;</a><a target="_blank" href="../<?=$result_face[0]['youtube']?>" class="share ic-ytb">&nbsp;</a><a target="_blank" href="https://fpt.com.vn/vi/dieu-khoan-su-dung" class="" title="">Điều khoản sử dụng</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank" href="https://fpt.com.vn/vi/so-do-website" class="" title="">Sơ đồ website</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://fpt.com.vn/vi/lien-he" class="" title="">Liên hệ &amp; Trợ giúp</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://fpt.com.vn/vi/resources?file=%2Fimages%2Ffiles%2Fthuong-hieu.pdf" title="" target="_blank">Thương hiệu</a>
                </div>
                <div class="bottom-ft-mb">
                    <a href="https://www.facebook.com/fptcorp" target="_blank" class="share ic-fb">&nbsp;</a><a href="https://www.youtube.com/user/onetvfpt" target="_blank" class="share ic-ytb">&nbsp;</a>
                    <div class="logo pa"><a href="https://fpt.com.vn/vi/" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
                </div>
            </div>
        </div>