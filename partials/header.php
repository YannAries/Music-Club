<!-- A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 -->
<!DOCTYPE html>
<html>
<head>
	<title>Music Club A Music Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Music Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>

	<div class="header">

		<div class="container">

			<div class="header-top">
				<div class="logo">
					<h1><a href="index.html">Music Club</a></h1>
				</div>

				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""> </span>
					<ul>
						<li ><a href="index.html" class="hvr-sweep-to-bottom color"><i class="glyphicon glyphicon-home"></i>Home  </a> </li>
						<li ><a href="album.html" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-picture"></i>Albums  </a> </li>
						<li><a href="blog.html"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-tags"></i>Blog</a></li>
						<li><a href="typo.html" class="hvr-sweep-to-bottom color3"><i class="glyphicon glyphicon-calendar"></i>Events </a></li>
						<li><a href="mail.html" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-envelope"></i>Mail </a></li>
						<div class="clearfix"> </div>
					</ul>

					<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>

				</div><!-- .top-nav -->

				<div class="clearfix"> </div>
			</div><!-- .header-top -->

			<div class="banner-main">

				<section class="slider">

					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-matter">
									<h3>Consectetur adipisicing elit</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								</div>
							</li>

							<li>
								<div class="banner-matter">
									<h3>Consectetur adipisicing elit</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								</div>
							</li>

							<li>
								<div class="banner-matter">
										<h3>Consectetur adipisicing elit</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
								</div>
							</li>
						</ul>
					</div>

				</section>

			</div>

				<!--FlexSlider-->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
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