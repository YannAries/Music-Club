<?php require_once 'partials/header.php'; ?>
<style>
	*{
		color: #fff;
	}
	form{
		margin: 0 auto;
		text-align: center;
	}
	input{
		display: block;
		margin: 0 auto;
		margin-bottom: 15px;
		color: #000000;

	}
	textarea{
		display: block;
		margin: 0 auto;
		margin-bottom: 15px;
	}

</style>
<form action="" name="review" method="POST">
	Artiste : <input type="text" name="author" placeholder="Prince">
	Album : <input type="text" name="album" placeholder="Lovesexy">
	Titre : <input type="text" name="title" placeholder="Glam Slam">
</form>

<textarea name="content" form="review" id="" cols="150" rows="25" placeholder="Taper ici votre revue..."></textarea>

<form action="" name="review" method="POST">
<input type="submit" name="Ajouter" value="Ajouter">
</form>
<?php require_once 'partials/footer.php'; ?>