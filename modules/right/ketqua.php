<div class="content_right" style="width: 96%">
	<?php
			echo'<p class="loai"><i class="fa fa-search" aria-hidden="true"></i> Kết quả tìm kiếm :</p>';

		if(isset($_POST['search'])){
			$timkiem=$_POST['search_query'];
			$sql="select * from products where product_keywords like '%$timkiem%'";
			$run_timkiem=mysqli_query($conn,$sql);
				
			while($dong_timkiem=mysqli_fetch_array($run_timkiem)){
			echo'<div class="hang" align="center" style="float:left; width: 200px; height: 220px;margin-bottom: 20px;">';
				echo '<p class="item-name">'.$dong_timkiem['product_title'].'</p>';
				echo '<img src="admincp/modules/sanpham/uploads/'.$dong_timkiem['product_image'].'" width="110" height="130"/>';
				echo '<p>Giá: <i style="color: red; font-weight: bold; font-size: 15px;">'.$dong_timkiem['product_price'].'đ</i></p>';
				echo '<p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id='.$dong_timkiem['product_id'].'">Chi tiết</a></p>';
			echo'</div>';	
			}
		
		
		}else{
			echo'<div style="align: center;padding-left: 270px">';
		echo '<h2 style="color: #F0e">Không tìm thấy kết quả<br>';
		echo '<img src="https://data.whicdn.com/images/230091033/original.gif" style="height: 100px; margin-left: 60px;margin-top: 20px">';

		}	
	
 ?>
 </div>

