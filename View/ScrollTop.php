<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
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
</html>