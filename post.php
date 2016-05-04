<?php require_once 'partials/header.php';

$id = $_GET['id'];

$query = $db->prepare('SELECT * FROM news WHERE id= :id');
$query->bindValue(':id', $id);
$query->execute();
$post = $query->fetch();
// debug($post);

?>

<!--content-->
	<div class="blog">

		<div class="container">

				<div class="col-md-9">

					<div class="blog-grid">

						<img class="img-responsive" src="images/b1.jpg" alt="" />
						<div class="lone-line">

							<h4><?= $post['title'] ?></h4>

								<ul class="grid-blog">
									<li><a href="#"><i class="glyphicon glyphicon-user"> </i><?= $post['author'] ?></a></li>
									<li><span><i class="glyphicon glyphicon-time"> </i><?= $post['creation_date'] ?></span></li>
									<li><a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Comment</a></li>
									<li><a href="#"><i class="glyphicon glyphicon-share"> </i>Partager</a></li>
								</ul>
							<p><?= $post['content'] ?></p>
							<br>
							<div class="comment-top">

								<div class="story">
									<h4>comments (3)</h4>
								</div>

								<div class="comments-top-top">

										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

											<div class="top-comment-right">

												<div class="right-comment">

													<h5>Bitch on the broom</h5>
													<span>05/03/2012 at 13:58</span>
													<div class="clearfix"> </div>
												</div>

												<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
												<a href="#" class="reply">Reply</a>

											</div><!-- .top-comment-right -->

											<div class="clearfix"> </div>
								</div><!-- .comments-top-top -->

								<div class="comments-top-top">
										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

										<div class="top-comment-right">
											<div class="right-comment">
												<h5>Bitch on the broom</h5>
												<span>05/03/2012 at 13:58</span>
												<div class="clearfix"> </div>
											</div>

											<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
											<a href="#" class="reply">Reply</a>
										</div>

										<div class="clearfix"> </div>
								</div><!-- .comments-top-top -->

								<div class="comments-top-top">

										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

										<div class="top-comment-right">
											<div class="right-comment">
												<h5>Bitch on the broom</h5>
												<span>05/03/2012 at 13:58</span>
												<div class="clearfix"> </div>
											</div>
											<p>Remaining essentially unchanged. It was popularised in the 1960s with the release of  Letraset sheets containing </p>
											<a href="#" class="reply">Reply</a>
										</div>

										<div class="clearfix"> </div>
								</div><!-- .comments-top-top -->

							</div><!-- .comment-top -->

							<div class="simply">

								<div class="story">
									<h4 >Write comment</h4>
								</div>

								<form>
									<div class="name">
										<span class="sit-in">Name:</span>
										<input type="text" value="">
									</div>

									<div class="name name-at">
										<span class="sit-in">Email:</span>
										<input type="text" value="">
									</div>

									<div class="name name-on">
										<span class="sit-in">Website:</span>
										<input type="text" value="">
									</div>

									<div class="name name-in">
										<span class="sit-in">Comment:</span>
										<textarea> </textarea>
									</div>

									<input type="submit" value="Post Comment">

									<div class="clearfix"> </div>
								</form>

							</div><!-- .simply -->

						</div><!-- .lone-line -->
					</div><!-- .blog-grid -->

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
						</div><!-- .cate-top -->

						<div class="cate-top">

							<h4>LAST COMMENTS</h4>

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
							</div><!-- .cate-cate -->

						</div><!-- .cate-top -->

					</div><!-- .grid-categories -->

				</div><!-- .col-md-3 -->

				<div class="clearfix"> </div>

		</div><!-- .container -->

	</div><!-- .blog -->

<?php require_once 'partials/footer.php';?>