<?php require_once 'inc/config.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Music Club - travail en équipe réalisé par des étudiants de l'école Webforce3</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Favicon -->
	<link href="images/favicon/favicon.ico" rel="icon" type="image/x-icon" />
	<!-- Apple iOS devices & Google Android Devices -->
	<link href="images/favicon/guitar-silhouette-152-242167.png" rel="apple-touch-icon-precomposed" />
	<!-- IE 10 Metro Tile Icon -->
	<meta name="msapplication-TileColor" content="#ffffff" />
	<meta name="msapplication-TileImage" content="images/favicon/guitar-silhouette-144-242167.png">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	<div class="header">
		<div class="container">

			<?php include 'partials/navbar.php' ?>

			<?php
			if ($current_page == 'index.php') {
				include 'partials/slider.php';
			}
			?>
				<!--FlexSlider-->
				<link rel="stylesheet" href="css/flexslider.min.css" type="text/css" media="screen" />
				<script defer src="js/jquery.flexslider.min.js"></script>
				<script type="text/javascript">
					/*$(function(){
						SyntaxHighlighter.all();
					});*/
					$(window).load(function(){
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
								$('body').removeClass('loading');
							}
						});
					});
				</script>
		</div><!-- .container -->
	</div><!-- .header -->