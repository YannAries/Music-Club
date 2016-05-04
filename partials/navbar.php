<div class="header-top">
	<div class="logo">
		<h1><a href="index.php">Music Club</a></h1>
	</div>

	<div class="top-nav">
		<span class="menu"><img src="images/menu.png" alt=""> </span>
		<ul>
			<li ><a href="index.php" class="hvr-sweep-to-bottom color"><i class="glyphicon glyphicon-home"></i>Home  </a> </li>
			<li ><a href="concerts.php" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-picture"></i>Albums  </a> </li>
			<li><a href="news.php"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-tags"></i>Blog</a></li>
			<li><a href="contact.php" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-envelope"></i>Mail </a></li>
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