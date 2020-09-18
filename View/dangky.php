<!DOCTYPE html>
<html lang="en">
<head>
	<title>502 Travel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/addMore.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/ht_gt1.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../Model/server.php" method="post">

					<span class="login100-form-title p-b-49" style="font-family: sans-serif; font-weight: bold;">
						Kinh Đô Travel
					</span>
					<span class="login100-form-title " style="font-family: sans-serif; font-size: 25px">
						Đăng ký
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tài Khoản</span>
						<div class="flexform">
							<i class='fa fa-user iconFormDK' ></i>
							<input class="input100 inputFormDK" type="text" name="username" placeholder="Tài khoản">
						</div>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Email</span>
						<div class="flexform">
							<i class='fa fa-envelope iconFormDK' ></i>
							<input class="input100 inputFormDK" type="text" name="email" placeholder="Nhập Email">
						</div>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Phone</span>
						<div class="flexform">
							<i class='fa fa-phone iconFormDK'></i>
							<input class="input100 inputFormDK" type="text" name="phone" placeholder="Nhập số điện thoại">
						</div>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required" style="margin-bottom: 23px">
						<span class="label-input100">Mật khẩu</span>
						<div class="flexform">
							<i class='fa fa-lock iconFormDK' ></i>
							<input class="input100 inputFormDK" type="password" name="password" placeholder="Mật khẩu">
						</div>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Nhập lại mật khẩu</span>
						<div class="flexform">
							<i class='fa fa-lock iconFormDK' ></i>
							<input class="input100 inputFormDK" type="password" name="password" placeholder="Nhập lại mật khẩu">
						</div>
					</div>


					<div style="height:20px"></div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login" style="font-family:sans-serif; ">
								Đăng ký
							</button>
						</div>
					</div>

					<div style="height:20px"></div>
					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> -->
</body>

</html>