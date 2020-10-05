<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>thong tin khac hang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="./css/addMore.css">
</head>
<body class="body">
	<?php 
		// include'header.php';
		include'testt.php';
	?>

	<div id="vnt-content">
		<div id="vnt-navation" class="breadcrumb">
			<div class="container">
				<div class="wrapper">
					<div class="navation">
						<ul>
							<li>
								<a title="Trang chủ" href="index.php">
									<span itemprop="title">Trang chủ</span>
								</a>
							</li>
							<li>
								<a href="dulichmienbac.php">
									<span>Thông tin khách hàng</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!-- hết breadcrumb -->
		<div class="lzd-playground">
			<div class="lzd-playground-main">
				<!-- <div class="lzd-playground-nav">
					<div class="member-info">
						<p><span>Xin chào,&nbsp;</span><span id="lzd_current_logon_user_name">Đức Kỷ</span></p>
					</div>
					<ul class="nav-container">
						<li class="item" id="Manage-My-Account">
							<a class="active" href="#" data-spm="Manage-My-Account">
								<span>Quản lý tài khoản</span>
							</a>
							<ul class="item-container">
								<li id="My-profile" class="sub">
									<a href="#" data-spm="My-profile">Thông tin cá nhân</a>
								</li>
								<li id="Address-book" class="sub">
									<a href="#" data-spm="Address-book">Giỏ hàng của bạn</a>
								</li>
							</ul>
						</li>
						<li class="item" id="My-Orders">
							<a href="#" data-spm="My-Orders">
								<span>Du lịch</span>
							</a>
							<ul class="item-container">
								<li id="Returns" class="sub">
									<a href="#" data-spm="Returns">Du lịch miền Bắc</a>
								</li>
								<li id="Cancellations" class="sub">
									<a href="#" data-spm="Cancellations">Du lịch miền Trung</a>
								</li>
								<li id="Cancellations" class="sub">
									<a href="#" data-spm="Cancellations">Du lịch miền Nam</a>
								</li>
							</ul>
						</li>
						<li class="item" id="My-Wishlists">
							<a href="#" data-spm="My-Wishlists">
								<span>Khách sạn</span>
							</a>
						</li>
						<li class="item itemkmargin" id="Sell-On-Lazada">
							<a href="#" data-spm="Sell-On-Lazada">
								<span>Liên hệ</span>
							</a>
						</li>
					</ul>
				</div> -->



				<div class="lzd-playground-right">
					<div class="breadcrumbkhachhang">
						<a data-spm-anchor-id="a2o4n.manage_account.0.0">Quản lý tài khoản</a>
					</div>
					<div id="container" class="container rightContainer_1UxO">
						<div class="accountPage_2lsd">
							<div class="row pageInner_1FHx">
								<div class="col-sm-12 col-md-2 col-lg-2">
									<div class="avatar_3KH_">
										<div>
											<img src="//graph.facebook.com/2141500879477452/picture?type=large" title="Đức">
											<button>Thay đổi</button>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-10 col-lg-10">
									<div>
										<form class="accountFormWrap_2oXG">
											<div class="form-group row">
												<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
													<span>Email</span>
												</label>
												<div class="col-sm-10 col-md-6 col-lg-6 inputkh">
													<div class="phoneInput_Q_2V">
														<input name="phone" class="form-control" type="text" placeholder="" value="ducky173099@gmail.com">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="phone" class="col-sm-2 col-form-label phoneLabel_3lBr">
													<span>Số điện thoại:</span>
												</label>
												<div class="col-sm-10 col-md-6 col-lg-6">
													<div class="phoneInput_Q_2V">
														<input name="phone" class="form-control" type="text" placeholder="" value="0989000410">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="firstName" class="col-sm-2 col-form-label">Họ và tên:</label>
												<div class="col-sm-10 col-md-6 col-lg-6">
													<input name="firstName" class="form-control" type="text" maxlength="30" placeholder="Họ và tên đệm" tabindex="3" value="Kỷ">
												</div>
											</div>
											<div class="form-group row">
												<label for="lastName" class="col-sm-2 col-form-label">Tên:</label>
												<div class="col-sm-10 col-md-6 col-lg-6">
													<input name="lastName" class="form-control" type="text" placeholder="Tên" maxlength="10" tabindex="4" value="Đức">
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="col-sm-2 col-form-label">Giới tính:</label>
												<div class="col-sm-10 col-md-6 col-lg-6">
													<div class="form-check form-check-inline">
														<div class="checkMail">
															<input type="radio" name="gender" value="1" checked="">
															<label class="form-check-label" for="male">Nam</label>
														</div>
													</div>
													<div class="form-check form-check-inline">
														<div class="checkMail">
															<input type="radio" name="gender" value="0">
															<label class="form-check-label" for="female">Nữ</label>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="col-sm-2 col-form-label birthdayLabel_2KaK">Ngày sinh:</label>
												<div class="col-sm-10 col-md-6 col-lg-6">
													<div class="DayPickerInput">
														<input type="date" name="ngay_di" class="form-text get_date" value="30/11/1999">
														<!-- <input placeholder="DD/MM/YYYY" type="date" readonly="" value="30/11/1999"> -->
													</div>
												</div>
											</div>
											<!-- <div class="form-group row">
												<label for="email" class="col-sm-2 col-form-label"></label>
												<div class="col-sm-10">
													<a class="changePasswordLink_2sez" href="#" rel="noopener">Thay đổi mật khẩu</a>
												</div>
											</div> -->
											<div class="form-group row">
												<label for="email" class="col-sm-2 col-form-label"></label>
												<div class="col-sm-10">
													<button type="submit" class="userSubmit_3ASx">Cập nhật</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="khoifooter">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 linefooter">
					<img src="images/line-bot.png" alt="">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="mainft">
				<div class="tdft thongtinfooter">
					<h2>Liên hệ</h2>
					<p class="ppp">56 Triều Khúc-Hà Nội</p>
					<p><i class="fas fa-envelope-open-text iconnho"></i> Email: ducky173099@gmail.com</p>
					<p><i class="fas fa-phone-volume iconnho"></i> Hotline: 0989000410</p>
					<div class="gg-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1957565648145!2d105.80015872085212!3d20.98478874489245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2sUniversity%20of%20Transport%20Technology!5e0!3m2!1sen!2s!4v1570459833113!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="tdft ft_ttmain">
					<h2>Thông tin</h2>
					<div class="tt_footerinner">
						<div class="tt_ft1">Tạp chí du lịch</div>
						<div class="tt_ft2">Tin tức</div>
					</div>
					<div class="tt_footerinner">
						<div class="tt_ft1">Cẩm nang du lịch</div>
						<div class="tt_ft2">Sitemap</div>
					</div>
					<div class="tt_footerinner">
						<div class="tt_ft1">Kinh nghiệm du lịch</div>
						<div class="tt_ft2">FAQ</div>
					</div>
					<div class="line_inner">
						<img src="images/ft-line.png" alt="">
					</div>
					<ul class="list_chinhsach">
						<li>
							<a href="#">502-Travel Toolbar</a>
						</li>
						<li>
							<a href="#">chính sách riêng tư</a>
						</li>
						<li>
							<a href="#">Thỏa thuận sử dụng</a>
						</li>
					</ul>
				</div>

				<div class="tdft form_ft">
					<h2>NEWSLETTER</h2>
					<div class="newsletter">
						<input type="text" class="form-control input-md" placeholder="email của bạn">
						<div class="iconemail_ft">
							<button type="submit">
								<i class="far fa-envelope"></i>
							</button>
						</div>
					</div>
					<h2 class="tenstore">Ứng dụng di động</h2>
					<div class="appstore ppp">
						<img src="images/app.png" alt="">
					</div>
					<h2 class="tenstore">Hotline</h2>
					<div class="hl_ft">
						<div class="iconhl_ft">
							<button>
								<i class="fas fa-headset"></i>
							</button>
						</div>
						<div class="sdt_ft">
							<span class="sdt_ft_inner">0989000410</span>
							<span>từ 8h đến 23h</span>
						</div>
					</div>
				</div>

			</div>
			<div class="tdft thanhtoan_ft">
				<h2>Chấp nhận thanh toán</h2>
				<div>
					<div class="ttcard_ft">
						<i class="_123pay"></i>
					</div>
					<div class="ttcard_ft">
						<i class="visa"></i>
					</div>
					<div class="ttcard_ft">
						<i class="master"></i>
					</div>
					<div class="ttcard_ft">
						<i class="jcb"></i>
					</div>
					<div class="ttcard_ft">
						<i class="vnpay"></i>
					</div>
					<div class="ttcard_ft">
						<i class="v-visa"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="pos_ft">
			<p class="text-center">Bản quyền của 502-Travel ® 2019. Bảo lưu mọi quyền. <br>Ghi rõ nguồn "www.502-Travel.com.vn" ® khi sử dụng lại thông tin từ website này. <br>Số giấy phép kinh doanh lữ hành Quốc tế: 10-234/2019/TCDL-GP LHQT</p>
		</div>
	</div>

	<div class="navbar-fixed-bottom fixxbot">
		<a href="" class="btn btn-primary nutlen float-xs-right">
			<i class="fa fa-chevron-up "></i>
		</a>
	</div>
	<script type="text/javascript">
		$(function(){
			$('.body').scroll(function(event) {
				if($('.body').scrollTop() > 350){
					$('.nutlen').addClass('hienthi');
				} else if($('.body').scrollTop() <= 190){
					$('.nutlen').removeClass('hienthi');
				}

			})

			$('.nutlen').click(function(event) {
				$('.body').animate({'scrollTop':0})
				return false;
			});
		})  
	</script>
</body>
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<!-- <script type="text/javascript" src="scripts/1.js"></script> -->
</html>