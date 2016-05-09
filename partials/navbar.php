<div class="header-top">
	<div class="logo">
		<h1><a href="index.php">Music Club</a></h1>
	</div>

	<div class="top-nav">
		<span class="menu"><img src="images/menu.png" alt=""> </span>
		<ul>
			<?php
			foreach($pages as $page_name => $page_url) {

					$class = '';

					if ($current_page == $page_url) {
						$class = 'active';
					}
			?>

			<li ><a href="<?= $page_url ?>" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-home"></i><?= $page_name ?>  </a>
			</li>

			<?php } ?>

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