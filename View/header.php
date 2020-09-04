<!-- <!DOCTYPE html>
<html lang="en"><head>
	<title> Travel </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/1.js"></script>
	<script type="text/javascript" src="scripts/activeColorMenuBar.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body class="body"> -->
	<?php include'../Model/server.php'; ?>

	<div class="khoiheader ">	
		<nav class="navbar navbar-expand-lg navbar-dark info-color khoinav ">
			<div class="header">
				<div class="trai">
					<li class="nav-item hotline">
						<a class="nav-link" href="lienhe.php">
							<span class="textnavbar">Hotline: <span>0989000410</span></span>
						</a>
					</li>
				</div>


				<div class="phai">
					<ul class="navbar-nav ml-auto dsphai">

						<li class="nav-item">
							<a class="nav-link theasearch" href="#">
								<div class="input-group nutsearch">
									<input type="search" ng-model="searchName" placeholder="Search">
								</div>
							</a>
						</li>

						<li class="nav-item">
							<img src="images/line.png" alt="">
						</li>

						<li class="nav-item active">
							<a class="nav-link" href="#">
								<i class="fas fa-shopping-cart textnavbar"></i>
								<span class="sr-only">(current)</span>
							</a>
						</li>

						<li class="nav-item">
							<img src="images/line.png" alt="">
						</li>
						<?php if (isset($_SESSION['login'])): ?>
							<li class="nav-item dropdown user">
								<a class="nav-link dropdown-toggle _1user" data-toggle="dropdown">
									<span class="textnavbar">User</span>
									<img src="images/avatar.svg" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
									<a class="dropdown-item textnavbar" href="#">Tài khoản</a>
									<a class="dropdown-item textnavbar" href="../Model/server.php?logout=true">Đăng xuất</a>
								</div>
							</li>
						<?php else: ?>
							<li class="nav-item dropdown user">
								<a class="nav-link dropdown-toggle _1user" data-toggle="dropdown">
									<img src="images/user.png" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
									<a class="dropdown-item textnavbar" href="login.php">Đăng nhập</a>
									<a class="dropdown-item textnavbar" href="#">Đăng ký</a>
									<a class="dropdown-item textnavbar" href="thongtinkhachhang.php">Tài khoản</a>
									<a class="dropdown-item textnavbar" href="donhang.php">Đơn hàng</a>
								</div>
							</li>
						<?php endif; ?>

						


						<li class="nav-item">
							<img src="images/line.png" alt="">
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">
								<img src="images/vn.png" alt="">
								<i class="textnavbar">VN</i>
							</a>
						</li>
					</ul>
				</div> <!-- hết header phai -->
			</div> <!-- hết container -->
		</nav> <!-- hết nav -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light navmaxwidth">

		<!-- toggle top bar menu responsive -->
			<div class="togglediv">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse colapp" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto dsheaderduoi ">

						<li class="nav-item ndheaderduoi dropdown">
							<a class="nav-link dropdown-toggle mautextnav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Du lịch<span class="sr-only">(current)</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item borderbot" href="dulichmienbac.php">Hùng vĩ miền Bắc</a>
								<a class="dropdown-item borderbot" href="dulichmienbac.php">Nắng gió miền Trung</a>
								<a class="dropdown-item" href="dulichmienbac.php">Sông nước miền Nam</a>
							</div>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link mautextnav" href="#">Khách sạn</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link mautextnav" href="lienhe.php">Liên hệ</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link mautextnav" href="#">Book tour</a>
						</li>
					</ul>
				</div>
			</div> <!-- hêt toggle div -->

			<div class="trai">
				<li class="nav-item hotline">
					<a class="nav-link logotravel" href="index.php">
						<span class="">502-Travel.vn</span>
					</a>
				</li>
			</div>

		</nav>

		<nav class="navbar navbar-light navduoi ">
			<div class="container header">

				<button class="navbar-toggler hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
				</button>

				<div class="trai">
					<li class="nav-item hotline">
						<a class="nav-link logotravel" href="index.php">
							<span class="">502-Travel.vn</span>
						</a>
					</li>
				</div>

				<div class="collapse navbar-toggleable-xs phai" id="exCollapsingNavbar2">
					<ul class="nav navbar-nav float-sm-right text-xs-center text-xs-right dsheaderduoi">
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="dulichmienbac.php">Du lịch <span class="sr-only">(current)</span></a>
							<div class="gnl_inner"> 
								<div class="global_inner" id="navmore"> 
									<ul> 
										<li class=""> 
											<a href="dulichmienbac.php" class="noafter"> 
												<span>Hùng vĩ miền Bắc</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="#" class="noafter"> 
												<span>Nắng gió miền Trung</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="#" class="noafter"> 
												<span>Sông nước miền Nam</span> 
											</a> 
										</li> 
									</ul> 
								</div> 
							</div> 
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="hotel.php">Khách sạn</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="thuexe.php">Vận chuyển</a>
							<div class="gnl_inner"> 
								<div class="global_inner" id="navmore"> 
									<ul> 
										<li class=""> 
											<a href="thuexe.php" class="noafter"> 
												<span>Thuê xe</span> 
											</a> 
										</li> 
										<li class=""> 
											<a href="#" class="noafter"> 
												<span>Đặt vé máy bay</span> 
											</a> 
										</li> 
									</ul> 
								</div> 
							</div> 
						</li>
						<!-- <li class="nav-item ndheaderduoi">
							<a class="nav-link" href="thongtinkhachhang.php">Tài khoản</a>
						</li>
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="donhang.php">Đơn hàng</a>
						</li> -->
						<li class="nav-item ndheaderduoi">
							<a class="nav-link" href="lienhe.php">Liên hệ</a>
						</li>
					</ul>
				</div>
			</div> <!-- hết container -->
		</nav><!--  hết nav -->

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.js">
	
	</script>
	<script type="text/javascript">

		const currentLocation = location.href;
		const menuItem = document.querySelectorAll('.dsheaderduoi li a');
		const menuLength = menuItem.length;

		for(let i = 0; i < menuLength; i++){
			if(menuItem[i].href == currentLocation){
				menuItem[i].className = "active"
			}
		}
	</script>
	<!-- </body>
</html> -->
