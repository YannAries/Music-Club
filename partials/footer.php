<div class="footer">
	<div class="container">
		<h2>
			<a href="index.php">Music Club</a>
		</h2>
			<ul>
				<li>
					<a href="index.php">Accueil</a>
				</li>
				<li>
					<a href="concerts.php">Concerts</a>
				</li>
				<li>
					<a href="news.php">News</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
					<div class="clearfix"></div>
				</ul>

			<p>&copy; <?= date('Y') ?> Music Club, tous droits réservés | Design de <a href="http://w3layouts.com/"target="_blank">W3layouts</a></p>
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