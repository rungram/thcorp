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
<div class="pc-menu menu fr">
	<ul>
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
            <li class=""> <a href="<?=$menutype?>/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html" class="" title="<?=$list[$i]["ten_vi"]?>"> <?=$list[$i]["ten_vi"]?><?php echo $child;?></a>
            <div class="sub b">
            <ul>
            
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
				<li class="has-sub "><?php echo $child1;?><a href="<?=$menutype?>/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" title="<?=$cat[$j]["ten_vi"]?>" class="sub-sub "><?=$cat[$j]["ten_vi"]?><?php echo $child2;?></a>
                <ul class="sub-two">
                  <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){
                  	$menutype = 'danh-muc-item';
                  	if($item[$k]['menutype']=='1')
                  	{
                  		$menutype = "tin-tuc-cat";
                  	}
                  	?>
                	<li><a href="<?=$menutype?>/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html" title="<?=$item[$k]["ten_vi"]?>"><?=$item[$k]["ten_vi"]?></a></li>
                  <?php }?> 
                </ul>
                
                
                </li> 
              <?php }?>
            
            	</ul>
            </div>
            </li>

<?php }?>				
			<li class=""> <a href="lien-he.html" class="" title="tintuc">Liên hệ</a>
            </li>
				</ul>
			</div>