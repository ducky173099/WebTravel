<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<link rel="stylesheet" href="./css/header.css">
</head>
<body>
	<div id="topheader">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
				<a class="navbar-brand" href="index.php">KinhDO - Travel</a>
			
				<div class=" menu" >
					<ul class="navbar-nav mr-auto w-100 justify-content-end menuBar">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle menu-item" href="dulichmienbac.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i> 
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item tittleHeader" href="login.php">Đăng nhập</a>
								<a class="dropdown-item tittleHeader" href="dangky.php">Đăng ký</a>
							</div>
						</li>
						<li class="nav-item"><a href="#" class="nav-link" id="search"><i class="fa fa-search"></i></a></li>
						<li class="ghl_menu nav-item" id="_open">
							<button type="button" id="ghl_menu btn2" class="btnMenuBar">
								<span class="icon" id="icon">
									<span id="icontren"></span>
									<span id="iconduoi"></span>
								</span>
							</button>
						</li> 
					</ul>
					<div class="search-form">
						<form>
							<input type="text" name="" placeholder="Search">
						</form>
					</div>
					<a href="#" class="close"><i class="fa fa-times"></i></a>
				</div>
			</div>
		</nav>
	</div>
	<nav id="global_navigation" class="global_navigation" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
		<div class="global_inner">
			<ul class="gn_links-01">
				<li class="child"> 
					<a href="dulichmienbac.php" class="noUnderline"> 
						<span class="titleHeader">Du lịch</span> 
					</a> 
					<button class="gnl_button" id="btnmore" type="button">
						<span class="iconbtnmore"></span>
						<span>yasuo</span>
						<span class="iconbtnmore" id="iconbtnmoredeg1"></span>
					</button> 
					<div class="gnl_inner"> 
						<div class="global_inner" id="navmore"> 
							<ul> 
								<li class=""> 
									<a href="dulichmienbac.php" class="noafter"> 
										<span>Hùng vĩ miền Bắc</span> 
									</a> 
								</li> 
								<li class=""> 
									<a href="dulichmienbac.php" class="noafter"> 
										<span>Nắng gió miền Trung</span> 
									</a> 
								</li> 
								<li class=""> 
									<a href="dulichmienbac.php" class="noafter"> 
										<span>Sông nước miền Nam</span> 
									</a> 
								</li> 
							</ul> 
						</div> 
					</div> 
				</li>
				<li> 
					<a href="hotel.php" class="noUnderline"> 
						<span class="titleHeader">Khách sạn</span> 
					</a> 
				</li>
				<li> 
					<a href="thuexe.php" class="noUnderline"> 
						<span class="titleHeader">Vận chuyển</span> 
					</a> 
				</li>
				<li> 
					<a href="lienhe.php"  class="noUnderline"> 
						<span class="titleHeader">Liên hệ</span> 
					</a> 
				</li>
				<li> 
					<a href="about.php"  class="noUnderline"> 
						<span class="titleHeader">Giới thiệu</span> 
					</a> 
				</li>
			</ul>
		</div>
	</nav>




	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>

	<script type="text/javascript">
		// search
		$(document).ready(function(){
			$('.menu-toggle').click(function(){
				$('.menu-toggle').toggleClass('active')
				$('nav').toggleClass('active')
		
			})
			$('#search').click(function(){
				$('.menu-item').addClass('hide-item')
				$('.search-form').addClass('active')
				$('.close').addClass('active')
				$('#search').hide()
			})
			$('.close').click(function(){
				$('.menu-item').removeClass('hide-item')
				$('.search-form').removeClass('active')
				$('.close').removeClass('active')
				$('#search').show()
			})
		})
	</script>
	<script type="text/javascript">
		// $( '#topheader .navbar-nav a' ).on( 'click', function () {
		// 	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
		// 	$( this ).parent( 'li' ).addClass( 'active' );
		// });

		// $(document).ready(function(){
		// 	$('.navbar-nav.menuBar li a').click(function(){
		// 		$('li a').removeClass('active');
		// 		$(this).addClass('active');
		// 	})
		// });

		const currentLocation = location.href;
		const menuItem = document.querySelectorAll('.gn_links-01 li a');
		const menuLength = menuItem.length;

		for(let i = 0; i < menuLength; i++){
			if(menuItem[i].href == currentLocation){
				menuItem[i].className = "current"
			}
		}
	</script>
			
</body>
<script src="./js/menuBar.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>