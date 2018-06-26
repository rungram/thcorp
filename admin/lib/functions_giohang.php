<?php
	function get_product_name($pid){
		global $d, $row;
		$sql = "select ten_vi from #_product where id='$pid'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['ten_vi'];
	}
	function get_masp($pid){
		global $d, $row;
		$sql = "select masp from #_product where id='$pid'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['masp'];
	}
	function get_giagiam($pid){
		global $d, $row_sale;
		$sql_sale = "select giagiam from #_product where id='$pid'";
		$d->query($sql_sale);
		$row_sale = $d->fetch_array();
		return $row_sale['giagiam'];
	}
	
	function get_mota($pid){
		global $d, $row_mt;
		$sql_mt = "select mota_vi from #_product where id='$pid'";
		$d->query($sql_mt);
		$row_mt = $d->fetch_array();
		return $row_mt['mota_vi'];
	}
	function get_kodau($pid){
		global $d, $row_mt;
		$sql_tkd = "select tenkhongdau from #_product where id='$pid'";
		$d->query($sql_tkd);
		$row_tkd = $d->fetch_array();
		return $row_tkd['tenkhongdau'];
	}
	function get_hinh($pid){
		global $d, $row_hinh;
		$sql_hinh = "select thumb from #_product where id='$pid'";
		$d->query($sql_hinh);
		$row_hinh = $d->fetch_array();
		return $row_hinh['thumb'];
	}
	function get_price($pid){
		global $d, $row;
		$sql = "select gia from table_product where id='$pid'";
		$d->query($sql);
		$row = $d->fetch_array();
		return $row['gia'];
	}
	function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	function get_ordersale_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			if(get_giagiam($pid)==0)
			$price=get_price($pid);
			else
			$price=get_giagiam($pid);
			$sum+=$price*$q;
		}
		return $sum;
	}
	
	function get_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$sum+=$q;
		}
		return $sum;
	}
	
	
	function addtocart($pid,$q){
		if($pid<1 or $q<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(product_exists($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['productid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['productid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
		}
	}
	function product_exists($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}

?>