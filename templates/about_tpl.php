<?php  if(!defined('_source')) die("Error");
	$d->setTable('gioithieu');
	$d->select("noidung_$lang,mota_$lang,link");
	if($d->num_rows()>0){
		$row = $d->fetch_array();
		$noidung_about= $row["noidung_$lang"];
		$noidung_mota= $row["mota_$lang"];
		$noidung_link= $row['link'];
	}
		
			
	$d->reset();
	$sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 0,9";
	$d->query($sql_tin_foo);
	$result_tinll_c=$d->result_array();
	
?>

  <link href="news.css" rel="stylesheet">
 <div class="wrapper page-news">
        <div id="main">
			<div class="fshop-mainbox">
            
            
                <div class="row">
                        <div class="fshop-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li class="active"><a href="gioi-thieu.html">Giới thiệu</a></li>
                            </ol>
                        </div>
                </div>
                
                
                <div class="row">
                <div class="fns-menunews">
                    <span class="fns-mnnewsicon"><i class="glyphicon glyphicon-menu-hamburger"></i> DANH MỤC TIN</span>
                    <ul class="clearfix">
                       <li class="active"><a href="gioi-thieu.html" title="">Giới thiệu về DANHLOI mobile</a></li>
                       <li class=""><a href="tuyen-dung.html" title="">Tuyển dụng</a></li>
                       <li class=""><a href="lien-he.html" title="">Liên hệ</a></li>
                    </ul>
                </div>
            	</div>


				
                
                <div class="row fshop-newslist">
        <!--LEFT - MAIN-->
        <div class="fshop-news-colleft"> 
        <div class="row"> 
        <div class="fns-lnewsbox">                            
         
         
         				
                    <h1 class="fnews-detail-title">Giới thiệu</h1>

                    
                    
                    <ul class="fnews-detail-orthernews">
                    </ul>
                    
                    <!--DETAIL ORTHER NEWS-->
					<input type="hidden" value="huy">
                    <div class="fnews-detail-content">
                        <p style="text-align: justify;"><strong><?=$result_detail['mota_vi']?></strong></p>
								
						<?=$noidung_about?>
                    </div>
       
                
          
          
           </div> </div> </div>
        <!--RIGHT SITEBAR-->
        <div class="fshop-news-colright">
            <div class="row">		
                <div class="fshop-rnl-row clearfix">
                    <div class="fshop-rnl-col">
                        
                            
                      
                          <div class="fshop-rnl-ctmore"> 
                          
                          <a href="" title="Thông tin khác" class="fns-rnewstitle"><h3>Thông tin chung</h3></a> 
                          <ul> 
                           <?php for($j=0,$count_tllc=count($result_tinll_c);$j<$count_tllc;$j++) { ?>  
                               <li class="clearfix"> <a href="thong-tin-chung/<?=$result_tinll_c[$j]['tenkhongdau']?>-<?=$result_tinll_c[$j]['id']?>.html" title="<?=$result_tinll_c[$j]['ten_vi']?>"> <div class="fshop-rnl-ctmoreimg"> <img src="images/logo.jpg"> </div> <div class="fshop-rnl-ctmoretitle"><?=$result_tinll_c[$j]['ten_vi']?> </div> </a> </li>  
						   <?php } ?> 
                          </ul> 
                          </div> 
                           
                          
                          
                             
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
			</div>
    </div>
 </div>
 