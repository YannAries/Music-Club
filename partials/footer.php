<div class="footer">
	<div class="container">
		<h2><a href="index.php"> Music Club</a></h2>
				<ul>
					<li ><a href="index.php" >Home  </a> </li>
					<li ><a href="concerts.php" >Albums  </a> </li>
					<li><a href="news.php"  >Blog</a></li>
					<li><a href="contact.php" >Mail </a></li>
					<div class="clearfix"> </div>
				</ul>
			<p > © <?= date('Y') ?> Music Club All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
</div><!--//footer-->

	<script>
	$(document).ready(function() {

		$('#form-search .dropdown-menu').on('click', function (e) {

			if ($(e.target).is('button')) {
				return true;
			}

			e.preventDefault();
			e.stopPropagation();
		});

	});
	</script>

</body>
</html>