<?php
	
	$d->reset();
	$sql_list ="select *  from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
				
?>
<script language="javascript"> 
    	function doEnter(evt){
	// IE					// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
	}
	function onSearch(evt) {
			var keyword = document.getElementById("keyword").value;
			if(keyword=='')
				alert('Bạn chưa nhập tên!');
			else{
			//var encoded = Base64.encode(keyword);
			location.href = "index.php?com=tim-kiem&keyword="+keyword;
			loadPage(document.location);			
			}
	}		
</script>
<div class="wr-page">
			<div class="logo fl"><a href="index.html" title=""><img src="images/ic-logo.png" alt="" class="w100" /></a></div>
			<a href="index.html" class="link-backhome fr b">Về trang chủ Trung Huy</a>
			<div class="lag fr">
				<a href="#" title="" class=" lag-en"></a>
				<a href="#" title="" class="active lag-vi"></a>
			</div>
			<div class="search fr">
				<a href="javascript: void(0);" title="" class="ic-search"></a>
				<div class="ip-search boxs-pc r">
					<img src="images/ar-s.png" alt="" />
                    <form class="fs-fsearch" id=""> 
					    <input type="text" placeholder="T&#236;m kiếm th&#244;ng tin ..." name="keyword" id="keyword" style="width: 80%;"/>
					    <button type="button" onclick="onSearch(event,'keyword');">Tìm</button>
                    </form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="black-menu">
			<div class="wr-page clearfix">
				<div class="menu pc-menu clearfix fl">
					<ul>
			  <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
						  $d->reset();
						  $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
						  $d->query($sql_cat);
						  $cat =$d->result_array();
						  $child = '<em class="arr-mb-mn"></em>';
						  $link = $list[$i]["ten_vi"].'<img src="images/bl-s.png" alt=""><em class="arr-mb-mn"></em>';
						  if(count($cat)<1)
						  {
						  	$child = "";
						  	$link = '<a href="danh-muc/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html" class="active" title="">'.$list[$i]["ten_vi"].'</a>';
						  	$menutype = 'danh-muc';
						  	if($list[$i]['menutype']=='1')
						  	{
						  		$link = '<a href="tin-tuc/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html" class="active" title="">'.$list[$i]["ten_vi"].'</a>';
						  	}
						  }
			  ?>
						<li class=""><?php echo $link;?>
							<?php 
							if(count($cat)>0)
							{
							?>
							<div class="sub r">
								<ul>
								<?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
									  $d->reset();
									  $sql_item ="select *  from #_product_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
									  $d->query($sql_item);
									  $item =$d->result_array();
									  $link1 = '<img class="ar" src="images/subt.png" alt="" /><span class="sub-sub ">'.$cat[$j]["ten_vi"].'</span><em class="arr-mb-mn"></em>';
									  if(count($item)<1)
									  {
									  	$child = "";
									  	$link1 = '<a href="danh-muc-cat/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html" class="" title="">'.$cat[$j]["ten_vi"].'</a>';
									  	$menutype = 'danh-muc';
									  	if($cat[$i]['menutype']=='1')
									  	{
									  		$link1 = '<a href="tin-tuc-list/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html" class="" title="">'.$cat[$j]["ten_vi"].'</a>';
									  	}
									  }
								?>
									<li class="has-sub ">
										<?php echo $link1;?>
										<?php 
										if(count($item)>0)
										{
										?>
										<ul class="sub-two">
										<?php for($k=0,$count_i=count($item);$k<$count_i;$k++){
											$menutype = 'danh-muc-item';
											if($item[$k]['menutype']=='1')
											{
												$menutype = "tin-tuc-cat";
											}
                  						?>
											<li><a href="<?=$menutype?>/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html" class="" title="" ><?=$item[$k]["ten_vi"]?></a></li>
										<?php 
										}
										?>
										</ul>
										<?php 
										}
										?>
									</li>
								<?php 
								}
								?>
								</ul>
							</div>
							<?php 
							}
							?>
						</li>
					<?php 
					}
					?>
						<li class=""> <a href="tin-tuc.html" class="" title="tintuc">Tin Tức<img src="images/bl-s.png" alt=""><em class="arr-mb-mn"></em></a>			
							<?php 
							$d->reset();
							$sql_cat ="select *  from #_tinloai1_1_list order by stt asc";
							$d->query($sql_cat);
							$cat =$d->result_array();
							$child = '<em class="arr-mb-mn"></em>';
							if(count($cat)<1)
							{
								$child = "";
							}
							?>
							<div class="sub r">
								<ul>
				            
				            <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
								  $d->reset();
								  $sql_item ="select *  from #_tinloai1_1_cat where id_list='".$cat[$j]["id"]."' order by stt asc";
								  $d->query($sql_item);
								  $item =$d->result_array();
								  $child1 = '<img class="ar" src="images/subt.png" alt="" />';
								  $child2 = '<em class="arr-mb-mn"></em>';
								  if(count($item)<1)
								  {
								  	$child1 = "";
								  	$child2 = "";
								  }
							?>
								<li class="has-sub "><?php echo $child1;?><a href="tin-tuc-list/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" class="" title=""><?=$cat[$j]["ten_vi"]?><?php echo $child2;?></a>
				                <ul class="sub-two">
				                  <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){
				                  	?>
				                	<li><a href="tin-tuc-cat/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html" class="" title="" ><?=$item[$k]["ten_vi"]?></a></li>
				                  <?php }?> 
				                </ul>
				                
				                
				                </li> 
				              <?php }?>
				            
				            	</ul>
				            </div>
				            </li>
						</ul>
					</div>
				<div class="num fr">
				</div>

			</div>