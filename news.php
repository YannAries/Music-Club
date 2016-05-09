<?php
require_once 'partials/header.php';

$query = $db->query('SELECT * FROM news');
$last_news = $query->fetchAll();

// On force la variable $page en chiffre avec intval(), si l'utilisateur passe du texte au paramètre ?page= il sera converti en 0
$page = !empty($_GET['page']) ? intval($_GET['page']) : 1;
// On force $page à 1 si $page = 0
$page = $page > 0 ? $page : 1;

$nb_news_per_page = 10;

$count_total_news = count($last_news); // 100 news

$nb_pages = ceil($count_total_news / $nb_news_per_page); // 10 pages

$query = $db->prepare('SELECT * FROM news ORDER BY creation_date DESC LIMIT :start, :nb_items');
$query->bindValue('start', ($page - 1) * $nb_news_per_page, PDO::PARAM_INT);
// On va chercher 10 lignes
$query->bindValue('nb_items', $nb_news_per_page, PDO::PARAM_INT);
$query->execute();
$results = $query->fetchAll();

?>

<!--content-->
	<div class="blog">

		<div class="container">

			<h3>News</h3>

				<div class="col-md-9">

					<nav>
  						<ul class="pagination">
							<?php
							for ($i = 1; $i <= $nb_pages; $i++) {

								$class = '';
								if ($i === $page) {
									$class = 'active';
								}
							?>
								<li class="<?= $class ?>"><a href="?page=<?= $i ?>"><?= $i ?></a></li>
							<?php } ?>
						</ul>
					</nav>


					<?php
						foreach ($results as $post) {
						$synopsis= substr($post['content'], 0, 250).'...';
					?>
						<div class="blog-grid">

							<a href="post.php"><img class="img-responsive" src="images/news/<?= $post['picture'] ?>" alt="" /></a>
							<div class="lone-line">

								<h4><a href="post.php?id=<?= $post['id']?>"><?= $post['title'] ?></a></h4>
								<ul class="grid-blog">
									<li><a href="#"><i class="glyphicon glyphicon-user"> </i><?= $post['author'] ?></a></li>
									<li><span><i class="glyphicon glyphicon-time"> </i><?= $post['creation_date'] ?></span></li>
									<li><a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Comment</a></li>
									<li><a href="#"><i class="glyphicon glyphicon-share"> </i>Partager</a></li>
								</ul>
								<p><?= $synopsis ?></p>
								<br><a class="more" href="post.php?id=<?= $post['id'] ?>">Lire la suite</a>
							</div>
						</div><!-- .blog-grid -->
					<?php } ?>

					<nav>
  						<ul class="pagination">
							<?php
								for ($i = 1; $i <= $nb_pages; $i++) {

									$class = '';
									if ($i === $page) {
										$class = 'active';
									}
							?>
							<li class="<?= $class ?>"><a href="?page=<?= $i ?>"><?= $i ?></a></li>
							<?php } ?>
						</ul>
					</nav>

				</div><!-- .col-md-9 -->

				<div class="col-md-3">

					<div class="grid-categories">
						<div class="cate-top">
							<h4>CATEGORIES</h4>
							<ul class="popular">
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>Lorem ipsum </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>Sed do eiusmod </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>At vero eos </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>On the other</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>Ut enim ad </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>No one reject </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>Lorem ipsum </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>At vero eos </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>On the other </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>Lorem ipsum </a></li>
								<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>No one reject </a></li>
							</ul>
						</div>

						<div class="cate-top">
							<h4>Derniers commentaires</h4>
							<div class="cate-cate">
								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"> </i>Design Blog is Online</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
								</div>
								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"> </i>Design Blog is Online</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
								</div>
								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"> </i>Design Blog is Online</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
								</div>
							</div>
						</div><!-- .cate-top -->

					</div><!-- .grid-categories -->

				</div><!-- .col-md-3 -->

			<div class="clearfix"> </div>

		</div><!-- .container -->
	</div><!-- .blog -->

<?php require_once 'partials/footer.php';?>