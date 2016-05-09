<?php 
require_once 'partials/header.php';

// On réceptionne les données du formulaire
$nom = !empty($_POST['nom']) ? $_POST['nom'] : '';
$email = !empty($_POST['email']) ? $_POST['email'] : '';
$sujet = !empty($_POST['sujet']) ? $_POST['sujet'] : '';
$message = !empty($_POST['message']) ? $_POST['message'] : '';
$status = false;
$errors = array();

// Le formulaire a été soumis, on a appuyé sur le bouton "Envoyer"
if (!empty($_POST)) { 
	
	// On vérifie les erreurs possibles
	if (empty($nom)) {
		$errors['nom'] = 'Veuillez renseigner votre nom';
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Veuillez renseigner un email valide';
	}
	if (empty($sujet) || !filter_var($sujet)) {
		$errors['sujet'] = 'Veuillez renseigner votre sujet';
	}
	if (empty($message)) {
		$errors['message'] = 'Votre message est vide';
	} else if (strlen($message) > 65535) {
		$errors['message'] = 'Votre message ne doit pas dépasser 65535 caractères';
	}

	//debug($errors);
	
	// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
	if (empty($errors)) {
		$query = $db->prepare('INSERT INTO mail SET nom = :nom, email = :email, sujet = :sujet, message = :message, date = NOW()');
		// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
		$query->bindValue(':nom', $nom, PDO::PARAM_STR);
		$query->bindValue(':email', $email, PDO::PARAM_STR);
		$query->bindValue(':sujet', $sujet, PDO::PARAM_STR);
		$query->bindValue(':message', $message, PDO::PARAM_STR);

		// On execute la requête
		$query->execute();

		// On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
		$insert_id = $db->lastInsertId();
		if (!empty($insert_id)) {
			$status = true;
		} 
		else {
			$errors = array('db_error' => 'Erreur interne, merci de réessayer ultérieurement!');
		}
	}
}

$result = array(
	'status' => $status,
	'errors' => $errors
);

?>

<!--content-->
			<div class="contact">
				<div class="container">
					<div class="contact-top">
						<h3>Nous contacter</h3>
					</div>		
		
					<div class="contact-grids">
						<div class="contact-form">
							<form>
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<span>Nom :</span>
										<input type="text" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Email :</span>
										<input type="text" class="text" value="">
									</div>
									<div class="col-md-4 in-contact">
										<span>Sujet :</span>
										<input type="text" class="text" value="">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
								<div class="contact-bottom-top">
									<span>Message :</span>
									<textarea> </textarea>
								</div>
								<input type="submit" name="Send" value="Envoyer">
							</form>
						</div>
						<div class="address">
					
					<div class="col-md-4 address-more">
						<h4>Adresse</h4>
						<div class="address-grid">
							<i class="glyphicon glyphicon-globe"></i>
							<div class="address1">
								<p>Lorem ipsum dolor</p>
								<p>TL 19034-88974</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid grid-address">
							<i class="glyphicon glyphicon-sujet"></i>
							<div class="address1">
								<p>+885699655</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						</div>
							<div class="col-md-8 map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325516.3770455822!2d30.532690549999998!3d50.40203550000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2sKyiv%2C+Ukraine!5e0!3m2!1sen!2sin!4v1435638348391" allowfullscreen=""></iframe>				
						</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
<!--//content-->

<?php require_once 'partials/footer.php' ?>