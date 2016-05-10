
<?php require_once 'partials/header.php';
// debug($_SESSION);

$query= $db->query('SELECT * FROM review ORDER BY creation_date DESC LIMIT 3');
$reviews= $query->fetchAll();

$query= $db->query('SELECT * FROM news ORDER BY creation_date DESC LIMIT 4');
$news= $query->fetchAll();
?>



			<div class="content">

				<div class="container">

					<div class="content-top">

						<div class="col-md-7 content-top1">
							<h3>Welcome</h3>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text
							, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose,

							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to</p>
						</div>

						<div class="col-md-5 top-col">
							<div class="col1">
									<div class="col-md-6 col2">
										<img src="images/ic.png" alt="" >
									</div>

									<div class="col-md-6 col3">
										<img src="images/ic1.png" alt="" >
									</div>

									<div class="clearfix"> </div>
							</div>

							<div class="col1">
								<div class="col-md-6 col4">
									<img src="images/ic2.png" alt="" >
								</div>

								<div class="col-md-6 col5">
									<img src="images/ic3.png" alt="" >
								</div>

								<div class="clearfix"> </div>
							</div>

						</div><!-- .col-md-5 top-col -->

						<div class="clearfix"> </div>

					</div><!--//content-top-->


						<?php foreach ($reviews as $key => $review) {?>
						<div class="content-mid">
							<div class="col-md-4 mid">
								<a href="review.php?id=<?= $review['id'] ?>"><img src="images/reviews/<?= $review['picture'] ?>" alt="" class="img-responsive">
									<div class="mid1">
										<h4><?= $review['title'] ?></h4>
										<i class="glyphicon glyphicon-circle-arrow-right"></i>
										<div class="clearfix"> </div>
									</div>
								</a>
							</div>

							<?php } ?>

							<div class="clearfix"> </div>

						</div><!--content-mid-->

				</div><!--container-->

				<div class="content-middle">

						<div class="container">

							<div class="content-mid-top">
								<h3> News</h3>
							</div>

							<div class="news">

								<?php foreach ($news as $key => $nouvelle) {?>

								<div class="col-md-6 new-more">

									<div class="new-more1">

										<div class="col-md-2 six">
											<img class="img-responsive" src="images/news/<?= $nouvelle['picture'] ?>" alt="">
										</div>

										<div class="col-md-10 six1">
											<h5><?= $nouvelle['title'] ?></h5>
											<p><?= substr($nouvelle['content'],0,100) ?></p>
											<a href="post.php?id=<?= $nouvelle['id'] ?>"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
										</div>

										<div class="clearfix"> </div>

									</div><!-- .new-more1 -->

								</div><!-- .col-md-6 new-more -->
								<div class="clearfix"> </div>
								<?php } ?>



							</div><!-- .news -->

						</div><!-- .container -->

				</div><!-- .content-middle -->

				<div class="content-bottom">
								<div class="container">
									<div class="content-bottom-top">
										<div class="col-md-6 content-bottom-top1">
											<h3>Prince</h3>
											<p>L’artiste américain Prince est mort jeudi 21 avril à l’âge de 57 ans. Les hommages des fans et des personnalités en faveur d’une des légendes de la musique se sont multipliés après l’annonce, notamment à Minneapolis (Minnesota), la ville d’origine du guitariste et chanteur. Certains, comme ce Petit Prince de Saint-Exupéry aux couleurs du chanteur, ont ému les internautes.</p>
											</div>
											<div class="col-md-6 bottom-co1">
												<img class="img-responsive" src="images/prince.jpg" alt="prince">

											</div>
										</div>
									</div>
				</div><!-- .content-bottom -->

			</div>

<?php require_once 'partials/footer.php';?>
