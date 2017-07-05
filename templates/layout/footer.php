<?php
	
	$d->reset();
	$sql_list ="select *  from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
				
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
			  
			  $d->reset();
			  $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
			  $d->query($sql_cat);
			  $cat =$d->result_array();
			  $child = '<em class="arr-mb-mn"></em>';
			  if(count($cat)<1)
			  {
			  	$child = "";
			  }
			  $menutype = 'danh-muc';
			  if($list[$i]['menutype']=='1')
			  {
			  	$menutype = "tin-tuc";
			  }
			  ?>
				<div class="box-it" style="width: 20%;">
					<div class="tt"><a href="<?=$menutype?>/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html" class="" title=""><?=$list[$i]["ten_vi"]?> </a><span class="ic-arrow"></span></div>
					<div class="list-sub clearfix">
						<div class="f-ftmn left">
						<?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
            				  $d->reset();
            				  $sql_item ="select *  from #_product_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
            				  $d->query($sql_item);
            				  $item =$d->result_array();
            				  $child1 = '<img class="ar" src="images/subt.png" alt="" />';
            				  $child2 = '<em class="arr-mb-mn"></em>';
            				  if(count($item)<1)
            				  {
            				  	$child1 = "";
            				  	$child2 = "";
            				  }
            				  $menutype = 'danh-muc-cat';
            				  if($cat[$j]['menutype']=='1')
            				  {
            				  	$menutype = "tin-tuc-list";
            				  }
            			?>
							<div><a href="<?=$menutype?>/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" title="<?=$cat[$j]["ten_vi"]?>" class="" title="<?=$cat[$j]["ten_vi"]?>"><?=$cat[$j]["ten_vi"]?></a></div>
							<?php }?>
						</div>
						<!-- <div><a href="<?php echo $config_url1;?>/" class="" title="">Thư viện ảnh & Video</a></div> -->
					</div>
				</div>
				<?php }?>
				
				<div class="logo pa"><a href="#" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
				<div class="clear"></div>
			</div>
			<div class="link">
				<a href="#" target="_blank" class="share ic-fb">&nbsp;</a>
				<a href="#" class="share ic-ytb">&nbsp;</a>
				<a href="#" class="" title="">Điều khoản sử dụng</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#" class="" title="">Sơ đồ website</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#" class="" title="">Liên hệ &amp; Trợ giúp</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="#" title="" target="_blank">Thương hiệu</a>
			</div>
			<div class="bottom-ft-mb">
				<a href="#" target="_blank" class="share ic-fb">&nbsp;</a><a href="#" target="_blank" class="share ic-ytb">&nbsp;</a>
				<div class="logo pa"><a href="#" title=""><img class="w100" src="images/logo-ft.png" alt=""></a></div>
			</div>
		</div>
	</div>