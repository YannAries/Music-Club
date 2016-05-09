<?php require_once 'partials/header.php';

if(!empty($_GET)){
$query = $db->prepare('SELECT * FROM review WHERE id= :id');
$query->bindValue(':id', $_GET['id']);
$query->execute();
$post = $query->fetch();


$query_c = $db->prepare('SELECT * FROM comment WHERE id_review= :id_review ORDER BY creation_date ASC');
$query_c->bindValue(':id_review', $_GET['id']);
$query_c->execute();
$comments= $query_c->fetchAll();
}

if(!empty($_POST)){
$add= $db->prepare('INSERT INTO comment SET name= :name, email= :email, comment= :comment, id_review= :id_review, creation_date= NOW()');
$add->bindValue(':name', $_POST['name']);
$add->bindValue(':email', $_POST['email']);
$add->bindValue(':comment', $_POST['comment']);
$add->bindValue(':id_review', $_GET['id']);
$add->execute();

}


$nb_of_comments = count($comments);
debug($_GET);
debug($_POST);
?>

<!--content-->
	<div class="blog">

		<div class="container">

				<div class="col-md-9">

					<div class="blog-grid">

						<img class="img-responsive" src="images/reviews/<?= $post['picture'] ?>" alt="" />
						<div class="lone-line">

							<h4><?= $post['title'] ?></h4>

								<ul class="grid-blog">
									<li><a href="#"><i class="glyphicon glyphicon-user"> </i><?= $post['author'] ?></a></li>
									<li><span><i class="glyphicon glyphicon-time"> </i><?= $post['creation_date'] ?></span></li>
									<li><a href="#comment-top"><i class="glyphicon glyphicon-comment"> </i><?= $nb_of_comments ?> Comment</a></li>
									<li><a href="#"><i class="glyphicon glyphicon-share"> </i>Partager</a></li>
								</ul>
							<p><?= $post['content'] ?></p>
							<br>
							<div class="comment-top" id="comment-top">

								<div class="story">
									<h4>comments (<?= $nb_of_comments ?>)</h4>
								</div>
								<?php foreach ($comments as $key => $comment){ ?>

									<div class="comments-top-top">

										<div class="top-comment-left">
											<img class="img-responsive" src="images/co.png" alt="">
										</div>

											<div class="top-comment-right">

												<div class="right-comment">

													<h5><?= $comment['Name'] ?></h5>
													<span><?= $comment['creation_date'] ?></span>
													<div class="clearfix"> </div>
												</div>

												<p><?= $comment['Comment'] ?> </p>
												

											</div><!-- .top-comment-right -->

											<div class="clearfix"> </div>
									</div><!-- .comments-top-top -->
									
								<?php } ?>
								

							

							<div class="simply">

								<div class="story">
									<h4 >Write comment</h4>
								</div>

								<form id="form" method= "post" action="">
									<div class="name">
										<span class="sit-in">Name:</span>
										<input type="text" name="name" value="">
									</div>

									<div class="name name-at">
										<span class="sit-in">Email:</span>
										<input type="text" name="email" value="">
									</div>


									<div class="name name-in">
										<span class="sit-in">Comment:</span>
										<textarea name="comment" form= "form"> </textarea>
									</div>

									<input type="submit" value="Post Comment">

									<div class="clearfix"> </div>
								</form>

							</div><!-- .simply -->

						</div><!-- .lone-line -->
					</div><!-- .blog-grid -->

				</div><!-- .col-md-9 -->

				<div class="clearfix"> </div>

		</div><!-- .container -->

	</div><!-- .blog -->

<?php require_once 'partials/footer.php';?>