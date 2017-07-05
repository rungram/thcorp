<h3>Liên kết website</h3>

<form name="frm" method="post" action="index.php?com=video&act=save" enctype="multipart/form-data" class="nhaplieu">

	<b>Link video:</b> <input type="text" name="ten" value="<?=$item['url']?>" class="input" /><br /><br />
    


<br />

	<br>
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=video&act=man'" class="btn" />
</form>