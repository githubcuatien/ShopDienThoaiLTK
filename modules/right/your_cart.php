<?php
	session_start();
?>
<div class="content_right" style="width:100%;">
	<h2 class="loai" align="center"><i class="fa fa-shopping-basket" ></i> Giỏ hàng của bạn</h2>
    <p align="right" style="color:#063;font-size:18px;text-decoration:underline;" >Xin chào: <?php
	
			if(isset($_SESSION['dangnhap'])){
			echo $_SESSION['dangnhap'];
		}
		
	?></p>
    <?php
	if(isset($_SESSION['dangnhap'])){
   	echo '<form style="margin-bottom: 40px;" action="logout.php" method="post">';
    	echo '<p style="float:right;"><input class="button1" type="submit" name="logout" value="Đăng xuất" /></p>';
    echo '</form>';
	
	}
 ?>
    <?php
		
	
		$current_url=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		if(isset($_SESSION['product'])){
			$total=0;
			foreach($_SESSION['product'] as $cart_itm){
				echo'<div style="background-color: #CCFFCC;margin-top: 20px;padding: 25px">';
					echo '<img src="admincp/modules/sanpham/uploads/'.$cart_itm['image'].'" width="100" height="100" style="float: left; margin-right: 20px" />';
					echo '<p style="font-weight:bold">Tên sản phẩm:'.$cart_itm['name'].'</p>';
					echo '<p style="float:right;margin-right:10px;"><a href="cart_update.php?removep='.$cart_itm['id'].'&return_url='.$current_url.'" class="hang11">Xóa</a></p><br>';
					echo '<p style="font-weight:bold">Mã sản phẩm:'.$cart_itm['id'].'</p><br>';
					echo '<p>Số Lượng: '.$cart_itm['qty'].'</p><br> 	';
					echo '<p>Giá 1 sản phẩm: <b style="color: red">'.$cart_itm['price'].' đ</b></p>';
					$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
					$total = ($total + $subtotal);
				echo'</div>';
			}
			echo '<strong style="float:right; margin-top:32px">Tổng tiền :<h2 style="color: red">'.$total.'VNĐ'.'</h2> </strong>';
			echo' <p style="margin-top:30px;"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Xóa tất cả</a></p><br/><br/>';
		
		if(!isset($_SESSION['dangnhap'])){
		echo '<p><a class="button1" href="?xem=thanhtoan">Thanh toán</a></p>';}else{
		echo '<form action="thanhtoan.php" method="post">';
		echo '<input class="button1" type="submit" name="muahang" value="Mua Hàng"/>';
		echo '</form>';
		}
		
		}
	else{
		echo'<div style="align: center;padding-left: 270px">';
			echo '<h2 style="color: #F0e">Giỏ hàng của bạn trống<br>';
			echo '<img src="https://data.whicdn.com/images/230091033/original.gif" style="height: 100px; margin-left: 60px;margin-top: 20px">';
		echo'</div>';
	}
	?>
 <p style="font-size:20px;margin:30px;"><a href="index.php">Tiếp tục mua hàng</a></p>
</div>