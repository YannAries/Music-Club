
<?php require_once 'partials/header.php';
debug($_SESSION);

$query= $db->query('SELECT * FROM review ORDER BY creation_date DESC LIMIT 3');
$reviews= $query->fetchAll();
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
								<h3> Team</h3>
							</div>

							<div class="news">

								<div class="col-md-6 new-more">

									<div class="new-more1">

										<div class="col-md-2 six">
											<img class="img-responsive" src="images/te.jpg" alt="">
										</div>

										<div class="col-md-10 six1">
											<h5>It is a long established fact that</h5>
											<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
											<a href="single.php"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
										</div>

										<div class="clearfix"> </div>

									</div><!-- .new-more1 -->

								</div><!-- .col-md-6 new-more -->

								<div class="col-md-6 new-more">
									<div class=" new-more1">
										<div class="col-md-2 six">
											<img class="img-responsive" src="images/te1.jpg" alt="">
										</div>
										<div class="col-md-10 six1">
											<h5>It is a long established fact that</h5>
											<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
											<a href="single.php"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>						</div>
											<div class="clearfix"> </div>
										</div>
								</div><!-- .col-md-6 new-more -->

								<div class="clearfix"> </div>

							</div><!-- .news -->

							<div class="news">

									<div class="col-md-6 new-more">
										<div class=" new-more1">

											<div class="col-md-2 six">
												<img class="img-responsive" src="images/te3.jpg" alt="">
											</div>

											<div class="col-md-10 six1">
												<h5>It is a long established fact that</h5>
												<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
												<a href="single.php"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>						</div>
											<div class="clearfix"> </div>
										</div>

									</div><!-- .col-md-6 new-more -->

									<div class="col-md-6 new-more">
											<div class=" new-more1">
												<div class="col-md-2 six">
													<img class="img-responsive" src="images/te2.jpg" alt="">
												</div>

												<div class="col-md-10 six1">
													<h5>It is a long established fact that</h5>
													<p>Kasertas lertyasea deeraeser miasera lertasa ritise doloert ferdas caplicabo nerafaes asety u lasec vaserat. nikertyade asetkertyptaiades goertayse.nikertyade asetkertyptaiades goertayse</p>
													<a href="single.php"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
												</div>

												<div class="clearfix"> </div>
											</div>
									</div><!-- .col-md-6 new-more -->

									<div class="clearfix"> </div>

							</div><!-- .news -->

						</div><!-- .container -->

				</div><!-- .content-middle -->

				<div class="content-bottom">
								<div class="container">
									<div class="content-bottom-top">
										<div class="col-md-6 content-bottom-top1">
											<h3>Kasertas lertyasea deeraeser</h3>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
												Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
											</div>
											<div class="col-md-6 bottom-co1">
												<img class="img-responsive" src="images/3.jpg" alt="">

											</div>
										</div>
									</div>
				</div><!-- .content-bottom -->

			</div>

<?php require_once 'partials/footer.php';?>
