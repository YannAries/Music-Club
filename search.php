<?php
require_once 'partials/header.php';

// debug($_GET);
// $memcachedConfig = array("host" => "127.0.0.1","port" => "11211");
// print_r ($memcachedConfig['host']);

$search = '';
$search_results = array();
$count_search_results = 0;

if (!empty($_GET['search'])) {
	$search = $_GET['search'];

	$query = $db->prepare('SELECT * FROM artists WHERE name LIKE :search OR members LIKE :search OR style LIKE :search OR country LIKE :search OR bio LIKE :search');
	$query->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
	$query->execute();
	$search_results = $query->fetchAll();
	$count_search_results = $query->rowCount();
	//$count_search_results = count($search_results);
}

if (!empty($_GET['style'])) {
	$style = $_GET['style'];

	// Search style
	$query = $db->prepare('SELECT * FROM artists WHERE style LIKE :style');
	$query->bindValue(':style', '%'.$style.'%', PDO::PARAM_STR);
	$query->execute();
	$search_results = $query->fetchAll();
	$search = $style;
	$count_search_results = $query->rowCount();
}

//FIXME : Merge search/style
// $search = $style;
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<?php if (!empty($search) || !empty($style)) { ?>

				<hr>

				<h2><?= $count_search_results ?> résultat(s) pour la recherche &laquo;<?= $search ?>&raquo;</h2>

				<div class="search-results list-group">
					<?php
					foreach($search_results as $key => $artist) {

						// $picture = getCover($artist['id']);
						$picture = '';
					?>
					<a href="search.php?id=<?= $search['id'] ?>" class="list-group-item clearfix">
						<!-- <img width="50" height="65" src="<?= $picture ?>"> -->
						<div class="content">
							<h4 class="list-group-item-heading"><?= $artist['name'] ?></h4>
	    					<p class="list-group-item-text"><?= $artist['style'] ?></p>
						</div>
					</a>
					<?php } ?>
				</div>
			<?php 
		} ?>
			</div>
		</div>
	</div>

<?php require_once 'partials/footer.php'; ?>