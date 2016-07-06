<?php require_once 'partials/header.php';

// Vérifier si $_GET['id'] est déclenché avant l'utiliser 
if (!isset($_GET['id'])) {

// Sinon, appliquer "undefine" 
$id = $_GET['id'] = "undefine";
}

$query = $db->prepare('SELECT * FROM news WHERE id= :id');
$query->bindValue(':id', PDO::PARAM_INT);
$query->execute();
$post = $query->fetch();
// debug($post);

?>
<!--content-->
	<div class="blog">
		<div class="container">
				<div class="col-md-9">
					<div class="blog-grid">
						<img class="img-responsive" src="images/news/<?= $post['picture'] ?>" alt="" />
						<div class="lone-line">
							<h4><?= $post['title'] ?></h4>
								<ul class="grid-blog">
									<li>
										<a href="#"><i class="glyphicon glyphicon-user"></i><?= $post['author'] ?></a>
									</li>
									<li>
										<span><i class="glyphicon glyphicon-time"></i><?= $post['creation_date'] ?></span>
									</li>
									<li>
										<a href="#"><i class="glyphicon glyphicon-comment"> </i>5 Commentaires</a>
									</li>
									<li>
										<a href="#"><i class="glyphicon glyphicon-share"></i>Partager</a>
									</li>
								</ul>
							<p><?= $post['content'] ?></p>
							<br>
							<div class="comment-top">
								<div class="story">
									<h4>commentaires(3)</h4>
								</div>

								<div class="comments-top-top">
										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

											<div class="top-comment-right">
												<div class="right-comment">
													<h5>Eodem modo typi</h5>
													<span>12/06/2016 @ 13:58</span>
													<div class="clearfix"></div>
												</div>

												<p>Odio putent offendit ne nam, ut prompta virtute vituperatoribus his. Mei zril volumus ex, mel nulla error at, ad dicunt convenire sit.</p>
												<a href="#" class="reply">Répondre</a>
											</div><!-- .top-comment-right -->

											<div class="clearfix"></div>
								</div><!-- .comments-top-top -->

								<div class="comments-top-top">
										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

										<div class="top-comment-right">
											<div class="right-comment">
												<h5>Eodem modo typi</h5>
												<span>12/06/2016 @ 14:58</span>
												<div class="clearfix"></div>
											</div>

											<p>Odio putent offendit ne nam, ut prompta virtute vituperatoribus his. Mei zril volumus ex, mel nulla error at, ad dicunt convenire sit.</p>
											<a href="#" class="reply">Répondre</a>
										</div>

										<div class="clearfix"></div>
								</div><!-- .comments-top-top -->

								<div class="comments-top-top">
										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

										<div class="top-comment-right">
											<div class="right-comment">
												<h5>Eodem modo typi</h5>
												<span>12/06/2016 @ 15:58</span>
												<div class="clearfix"></div>
											</div>
											<p>Odio putent offendit ne nam, ut prompta virtute vituperatoribus his. Mei zril volumus ex, mel nulla error at, ad dicunt convenire sit.</p>
											<a href="#" class="reply">Répondre</a>
										</div>

										<div class="clearfix"></div>
								</div><!-- .comments-top-top -->
							</div><!-- .comment-top -->

							<div class="simply">
								<div class="story">
									<h4>Rédiger un commentaire</h4>
								</div>

								<form>
									<div class="name">
										<span class="sit-in">Nom</span>
										<input type="text" value="">
									</div>

									<div class="name name-at">
										<span class="sit-in">Email</span>
										<input type="text" value="">
									</div>

									<div class="name name-on">
										<span class="sit-in">Site internet</span>
										<input type="text" value="">
									</div>

									<div class="name name-in">
										<span class="sit-in">Commentaire</span>
										<textarea>...</textarea>
									</div>

									<input type="submit" value="Envoyer">

									<div class="clearfix"></div>
								</form>
							</div><!-- .simply -->
						</div><!-- .lone-line -->
					</div><!-- .blog-grid -->
				</div><!-- .col-md-9 -->

				<div class="col-md-3">
					<div class="grid-categories">
						<div class="cate-top">
							<h4>CATÉGORIES</h4>
							<ul class="popular">
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lorem ipsum</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Sed do eiusmod</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>At vero eos</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lorem ipsum</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Ut enim ad</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Sed do eiusmod</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lorem ipsum</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>At vero eos</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Ut enim ad</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Lorem ipsum</a>
								</li>
								<li>
									<a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Sed do eiusmod</a>
								</li>
							</ul>
						</div><!-- .cate-top -->

						<div class="cate-top">
							<h4>DERNIERS COMMENTAIRES</h4>

							<div class="cate-cate">
								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"></i>Ceci est un Lorem ipsum</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
								</div>

								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"></i>Ceci est un Lorem ipsum</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
								</div>

								<div class="head-blog">
									<h6><i class="glyphicon glyphicon-chevron-right"></i>Ceci est un Lorem ipsum</h6>
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