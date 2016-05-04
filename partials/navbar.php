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