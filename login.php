<?php
require_once 'partials/header.php';

$login = !empty($_POST['login']) ? strip_tags(trim($_POST['login'])) : '';
$password = !empty($_POST['password']) ? strip_tags(trim($_POST['password'])) : '';


    // Pour éviter une requête inutile, on peut vérifier que l'utilisateur a bien saisi un mail valide et que le password n'est pas vide.
    if (filter_var($login, FILTER_VALIDATE_EMAIL) && !empty($password)) {

        // On va chercher en base de donnée l'ID, le prénom, le nom et le mot de passe haché correspodnant au mail spécifié
        $query = $db->prepare('SELECT * FROM user WHERE login = :login');
        $query->bindValue(':login', $login, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetchAll();

        // On compte le nombre de résultats retournés (1 si l'utilisateur existe) et on compare le mot de passe à sa version hachée
        if (count($user) > 0 && password_verify($password, $user[0]['password'])) {

            // L'utilisateur existe bien en base de donnée avec le mail spécifié, et le mot de passe correspond, il est donc authentifié
            $_SESSION['user'] = $user[0]['id'];
            $_SESSION['user_type'] = $user[0]['user_type'];
        	echo '<div class="alert alert-success" role="alert">';
			echo 'connexion réussie !';
			echo '</div>';

				//header('Location: index.php');
				redirectJS('index.php', 2);

				exit();

        } else {

            $errors['login'] = 'Utilisateur non trouvé ou mot de passe incorrect';

        }
    } else {

        $errors['db_error'] = 'Erreur interne, merci de reessayer ulterieurement';

    }


?>

<style>

form{
	margin: 0 auto;
	width: 500px;
}
</style>

	<div class="container">

		<form class="form-horizontal" method="POST" no-validate>

			<h1>Connexion</h1>
			<hr>


			<div class="form-group<?= !empty($errors['login']) ? ' has-error' : '' ?>">
				<label for="login" class="col-sm-2 control-label">Login</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="login" name="login" placeholder="Votre email" value="<?= $login ?>">
					<span style="color: red"><?= !empty($errors['login']) ? $errors['login'] : '' ?></span>
				</div>
			</div>
			<div class="form-group<?= !empty($errors['password']) ? ' has-error' : '' ?>">
				<label for="password" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					<span style="color: red"><?= !empty($errors['password']) ? $errors['password'] : '' ?></span>
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Connexion</button>
				</div>
			</div>
		</form>
	</div>

<?php
require_once 'partials/footer.php';?>