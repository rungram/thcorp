<?php 
	$d->reset();
	$sql_tin_nb= "select * from #_tinloai1_1 order by id desc limit 0,5";
	$d->query($sql_tin_nb);
	$tin_nb = $d->result_array();
?>
<ul id="webticker" class="newsticker" style="width: 3456px; transition-duration: 7.04286s; left: -493px;">
	<!-- <div class="for-nwidth"> -->
	<?php for($i=0,$count_tnb=count($tin_nb);$i<$count_tnb;$i++){ ?>
	<li class="news-animate r hide-mb"> <a href="tin-tuc-detail/<?=$tin_nb[$i]["tenkhongdau"]?>-<?=$tin_nb[$i]["id"]?>.html" title="<?=$tin_nb[$i]["ten_vi"]?>"><?=$tin_nb[$i]["ten_vi"]?></a> </li>
	<?php }?>
</ul>