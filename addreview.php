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
		color

	}
	textarea{
		display: block;
		margin: 0 auto;
		margin-bottom: 15px;
	}

</style>
<form action="" name="review" method="POST">
	titre: <input type="text" name="title">
	auteur: <input type="text" name="author">
</form>

<textarea name="content" form="review" id="" cols="150" rows="25"></textarea>

<form action="" name="review" method="POST">
<input type="submit">
</form>
<?php require_once 'partials/footer.php'; ?>