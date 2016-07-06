<?php require_once 'inc/config.php'; 
//debug($_SESSION);

?>
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
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/modernizr.custom.97074.js"></script>
	<!--script-->
	<script src="js/jquery.chocolat.min.js"></script>
	<link rel="stylesheet" href="css/chocolat.min.css" type="text/css" media="screen" charset="utf-8">
	<!--light-box-files -->
	<script type="text/javascript" charset="utf-8">
/*		$(function() {
			$('.gallery a').Chocolat();
		});*/
	</script>
</head>
<body>

	<?php

	$query= $db->query('SELECT * FROM review ORDER BY creation_date DESC');
	$reviews= $query->fetchAll();
	//debug($images);
	?>

	<!--header-->
	<div class="header header-main">
		<div class="container">

		<?php require_once 'partials/navbar.php' ?>
		</div>
	</div>
	<!--//header-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3>Revues</h3>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<?php foreach ($reviews as $key => $review) {?>
					<li>
						<a href="review.php?id=<?= $review['id'] ?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/reviews/<?= $review['picture'] ?>" alt="revues" />
							<div>
								<h5><?= $review['title'] ?></h5>
								<span>By <?= $review['author'] ?></span>
							</div>
						</a>
					</li>

					<?php } ?>
					<li>
						<a href="images/a2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a2.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a3.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a4.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a5.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a6.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a7.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>

					<li>
						<a href="images/a8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a8.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					
					<li>
						<a href="images/a9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="images/a9.jpg" alt="" />
							<div>
								<h5>Musique</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
			<script type="text/javascript">
				$(function() {
					$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
				});
			</script>
		</div>
	</div>
	<!--//gallery-->

<?php require_once 'partials/footer.php';?>