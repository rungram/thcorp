
<h3>Thêm danh mục</h3>
<form name="frm" method="post" action="index.php?com=product&act=save_list" enctype="multipart/form-data" class="nhaplieu">	    	    
    <b>Tên danh mục</b> <input type="text" name="ten_vi" value="<?=@$item['ten_vi']?>" class="input" /><br /><br>
    <b>Class icon desktop</b> <input type="text" name="ten_en" value="<?=@$item['ten_en']?>" class="input" /><br /><br>
    <b>Class icon mobile</b> <input type="text" name="ten_cn" value="<?=@$item['ten_cn']?>" class="input" /><br /><br>
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br>

	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br />
	<b>Loại menu</b>
	<select name="menutype" id="menutype" class="main_font">
	<?php 
		if($item['menutype']==2)
		{
	?>
		<option value="1">Tin tức</option>	
		<option value="2" selected="selected">Sản phẩm</option>
	<?php
		}
		else 
		{
	?>
		<option value="1">Tin tức</option>	
		<option value="2">Sản phẩm</option>
	<?php	
		}
	?>	
	</select><br/><br/>
	<b>Vị trí </b>
	<select name="vitri" id="vitri" class="main_font">
	<?php 
		if($item['vitri']==2)
		{
	?>
		<option value="1">Top</option>	
		<option value="2" selected="selected">Bottom</option>
	<?php
		}
		else 
		{
	?>
		<option value="1">Top</option>	
		<option value="2">Bottom</option>
	<?php	
		}
	?>	
	</select><br/>
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=product&act=man_list'" class="btn" />
	
</form>