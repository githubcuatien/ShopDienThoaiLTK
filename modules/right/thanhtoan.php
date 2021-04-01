<?php
session_start();
if (isset($_POST['login'])) {
	$c_email = $_POST['email'];
	$c_pass = $_POST['password'];
	$sel_c = "select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
	$run_login = mysqli_query($conn, $sel_c);
	$check_login = mysqli_num_rows($run_login);
	if ($check_login == 0) {
		echo '<script>alert("password or email incorrect")</script>';
	} else {
		$_SESSION['dangnhap'] = $c_email;
		header('location:index.php?xem=cart');
	}
}
?>

<div class="content_right" style="width:100%;">
	<h1 align="center">
		<p class="loai">Đăng nhập và mua hàng</p>
	</h1>
	<form action="" method="post">
		<div class="container">
			<label for="uname"><b>Nhập Tên Đăng nhập</b></label>
			<input type="text" placeholder="Nhập Tên Đăng nhập" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Nhập Password" name="password" required>

			<button type="submit" name="login">Login</button>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</div>

		<div class="container" style="background-color:#f1f1f1">
			<span class="psw">Chưa có <a href="index.php?xem=dangky">tài khoản?</a></span>
		</div>
		<style>
			body {
				font-family: Arial, Helvetica, sans-serif;
			}

			form {
				margin-left: 20px;
			}

			.container input[type=text],
			input[type=password] {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				box-sizing: border-box;
			}

			button {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
			}

			button:hover {
				opacity: 0.8;
			}

			.cancelbtn {
				width: auto;
				padding: 10px 18px;
				background-color: #f44336;
			}

			.container {
				padding: 16px;
			}

			span.psw {
				float: right;
				padding-top: 16px;
			}

			@media screen and (max-width: 300px) {
				span.psw {
					display: block;
					float: none;
				}

				.cancelbtn {
					width: 100%;
				}
			}
		</style>
	</form>

</div>
