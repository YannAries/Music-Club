<div class="header-top">
	<div class="logo">
		<h1>
			<a href="index.php">Music Club</a>
		</h1>
	</div>

	<div class="top-nav">
		<span class="menu"><img src="images/menu.png" alt=""></span>
		<ul>
		
			<?php
			foreach($pages as $page_name => $page_url) {
					$class = '';

					if ($current_page == $page_url) {
						$class = 'active';
					} ?>

			<li>
				<a href="<?= $page_url ?>" class="hvr-sweep-to-bottom color1"><?= $page_name ?></a>
			</li>

			<?php } ?>
			<div class="clearfix"></div>
		</ul>

		<form action="search.php" id="form-search" class="form-horizontal navbar-form navbar-right" role="form">

			<div class="input-group" id="adv-search">
				<input name="search" type="text" class="form-control" placeholder="Recherche..." />
				<div class="input-group-btn">
					<div class="btn-group" role="group">
						<div class="dropdown dropdown-lg">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
							</button>

							<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>

							<div class="dropdown-menu dropdown-menu-right" role="menu">
								<div class="row">
									<div class="form-group ">
										<label class="col-sm-4 control-label" for="filter">Filtrer par</label>
										<div class="col-sm-8">
											<select class="form-control">
												<option value="artiste" selected>Artiste</option>
												<option value="news">News</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<label class="col-sm-4 control-label" for="title">Style</label>
										<div class="col-sm-8">
											<select id="style" name="style" class="form-control">

												<?php
												foreach($styles as $style_data) {
													$style_id = $style_data['style_id'];
													//$style_label = $style_data['style_label'];
													$style_name = $style_data['style_name']; ?>
												<option value="<?= $style_name ?>"><?= $style_name ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<button type="submit" class="btn btn-primary">Recherche<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div><!-- .top-nav -->

	<div class="clearfix"></div>
</div><!-- .header-top -->