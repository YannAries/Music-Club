<?php
require_once 'partials/header.php';

$pseudo = !empty($_POST['pseudo']) ? strip_tags(trim($_POST['pseudo'])) : '';
$login = !empty($_POST['login']) ? strip_tags(trim($_POST['login'])) : '';
$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';
$confirm_password = !empty($_POST['confirm_password']) ? strip_tags($_POST['confirm_password']) : '';

if (!empty($_POST)) {

	if (empty($pseudo)) {
		$errors['pseudo'] = 'Veuillez renseigner un pseudo valide.';
	}
	if (empty($login) || !filter_var($login, FILTER_VALIDATE_EMAIL)) {
		$errors['login'] = 'Veuillez renseigner un email valide.';
	}
	if (empty($password)) {
		$errors['password'] = 'Veuillez renseigner un mot de passe.';
	} else if (strlen($password) < 8) {
		$errors['password'] = 'Votre mot de passe doit comporter au moins 8 caractères.';
	}
	if (!empty($password) && $password !== $confirm_password) {
		$errors['confirm_password'] = 'Les 2 mots de passe ne correspondent pas.';
	}

	if (empty($errors)) {

		// On vérifie que l'identifiant/email n'est pas déjà pris
		$query = $db->prepare('SELECT * FROM user WHERE login = :login');
		$query->bindValue(':login', $login, PDO::PARAM_STR);
		$query->execute();
		$user = $query->fetch();

		if (!empty($user)) {
			$errors['login'] = 'Cet adresse email est déjà pris.';
		} 

		else {

			$crypted_password = password_hash($password, PASSWORD_BCRYPT);

			$query = $db->prepare('INSERT INTO user SET pseudo = :pseudo, login = :login, password = :password, date = NOW()');

			// Pour chacune des variables précédées d'un ':' on doit faire un bindValue pour passer la valeur à la requête
			$query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
			$query->bindValue(':login', $login, PDO::PARAM_STR);
			$query->bindValue(':password', $crypted_password, PDO::PARAM_STR);

			// On exécute la requête
			$query->execute();

			// On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
			$insert_id = $db->lastInsertId();

			if (!empty($insert_id)) {

				// On connecte l'utilisateur
				$_SESSION['user_id'] = $insert_id;
				$_SESSION['user_type'] = $user[0]['user_type'];

				echo '<div class="alert alert-success" role="alert">';
				echo 'Inscription réussie !';
				echo '</div>';

				//header('Location: index.php');
				redirectJS('index.php', 2);
				exit();
			}

			$errors['db_error'] = 'Erreur interne, merci de réessayer ultérieurement.';
		}
	}
} ?>

<style>
	form{
		margin: 0 auto;
		width: 500px;
}
</style>

	<div class="container">
		<form class="form-horizontal" method="POST" no-validate>
			<h1>Inscription</h1>
			<hr>
			<div class="form-group<?= !empty($errors['pseudo']) ? ' has-error' : '' ?>">
				<label for="pseudo" class="col-sm-2 control-label">Pseudo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo" value="<?= $pseudo ?>">
					<span style="color: red"><?= !empty($errors['pseudo']) ? $errors['pseudo'] : '' ?></span>
				</div>
			</div>

			<div class="form-group<?= !empty($errors['login']) ? ' has-error' : '' ?>">
				<label for="login" class="col-sm-2 control-label">Adresse email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="login" name="login" placeholder="Votre adresse email" value="<?= $login ?>">
					<span style="color: red"><?= !empty($errors['login']) ? $errors['login'] : '' ?></span>
				</div>
			</div>

			<div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
				<label for="password" class="col-sm-2 control-label">Mot de passe</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
					<span style="color: red"><?= !empty($errors['password']) ? $errors['password'] : '' ?></span>
				</div>
			</div>

			<div class="form-group<?= !empty($errors['confirm_password']) ? ' has-error' : '' ?>">
				<label for="confirm_password" class="col-sm-2 control-label">Confirmer</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmation du mot de passe">
					<span style="color: red"><?= !empty($errors['confirm_password']) ? $errors['confirm_password'] : '' ?></span>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Valider</button>
				</div>
			</div>
		</form>
	</div>

<?php
require_once 'partials/footer.php';?>