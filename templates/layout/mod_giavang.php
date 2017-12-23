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
            <li class="">
                <a href="https://www.fpt.com.vn/vi/ve-fpt" class="" title="">
                    Về chúng tôi
                    <em class="arr-mb-mn"></em>
                </a>
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
                        <li class="has-sub ">
                            <img class="ar" src="images/subt.png" alt="" />
                            <a href="javascript: void(0);" class="sub-sub ">
                                Lịch sử
                                <em class="arr-mb-mn"></em>
                            </a>
                            <ul class="sub-two">
                             <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){
			                  	$menutype = 'danh-muc-item';
			                  	if($item[$k]['menutype']=='1')
			                  	{
			                  		$menutype = "tin-tuc-cat";
			                  	}
		                  	?>
                                <li>
                                    <a href="https://www.fpt.com.vn/vi/ve-fpt/lich-su/cac-moc-lich-su" class="">C&#225;c mốc lịch sử </a>
                                </li>
                                <?php }?> 
                            </ul>
                        </li>
                        <?php }?>
            </ul>
        </div>
        </li>
        <?php }?>	
        <div class="clear"></div>
    </div>