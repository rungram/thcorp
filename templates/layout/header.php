<?php
	$d->reset();
	$sql_list ="select *  from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *  from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
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




<header class="fs-header"> 
	<div class="fs-wrap clf"> <a class="fs-logo fi" title="Dienthoaidanhloi.vn" href="index.html"><i class="fi fi-logo"></i></a> 
        <form class="fs-fsearch" id=""> 
            <input class="fs-ipsearch search-text-box keyword" placeholder="Nhập tên sản phẩm tìm kiếm ..." type="text" id="keyword"> 
            <button type="button" class="fs-btnsearch" onclick="onSearch(event,'keyword');" >
                <i class="fi fi-isearch"></i>
            </button> 
            <div class="asmr"> 
                 <ul class="fshop-search-cate"></ul>
                 <ul class="fshop-search-promotion"></ul>
                 <ul class="fshop-search-old-product"></ul>
                 <ul class="fshop-search-discharge"></ul>
                 <ul class="fshop-search-prod"></ul>
                 <ul class="fshop-search-acces"></ul>
             </div>

 		</form>
         <div class="menu_top">
        
        
         <?php include _template."layout/menu_top.php"; ?>
        
        </div>
 </div>

 </header>