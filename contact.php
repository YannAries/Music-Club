<?php
require_once 'partials/header.php';
//debug($_POST);

// On réceptionne les données du formulaire
$lastname = '';
if (!empty($_POST['lastname'])) {
	$lastname = $_POST['lastname'];
}

$firstname = '';
if (!empty($_POST['firstname'])) {
	$firstname = $_POST['firstname'];
}

$email = '';
if (!empty($_POST['email'])) {
	$email = $_POST['email'];
}

$message = '';
if (!empty($_POST['message'])) {
	$message = $_POST['message'];
}

$newsletter = 0;
if (!empty($_POST['newsletter'])) {
	$newsletter = 1;
}

$errors = array();

// Le formulaire a ete soumis, on a appuye sur le bouton Envoyer
if (!empty($_POST)) {

	// On check les erreurs possibles
	if (empty($lastname)) {
		$errors['lastname'] = 'Veuillez renseigner votre nom';
	}
	if (empty($firstname)) {
		$errors['firstname'] = 'Veuillez renseigner votre prénom';
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Veuillez renseigner une adresse email valide';
	}
	if (empty($message)) {
		$errors['message'] = 'Votre message est vide';
	} else if (strlen($message) > 65535) {
		$errors['message'] = 'Votre message ne doit pas dépasser 65535 caractères';
	}

	//debug($errors);

	// Aucune erreur dans le formulaire, tous les champs ont été saisis correctement
	if (empty($errors)) {

		$query = $db->prepare('INSERT INTO contact SET lastname = :lastname, firstname = :firstname, email = :email, newsletter = :newsletter, message = :message, date = NOW()');

		// Pour chacune des variables précédées d'un : on doit faire un bindValue pour passer la valeur à la requête
		$query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
		$query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
		$query->bindValue(':email', $email, PDO::PARAM_STR);
		$query->bindValue(':newsletter', $newsletter, PDO::PARAM_BOOL);
		$query->bindValue(':message', $message, PDO::PARAM_STR);

		// On execute la requête
		$query->execute();

		// On récupère le numéro de la ligne automatiquement généré par MySQL avec l'attribut AUTO_INCREMENT
		$insert_id = $db->lastInsertId();

		if (!empty($insert_id)) {
			echo '<div class="alert alert-success" role="alert">';
			echo 'Votre message a bien été envoyé';
			echo '</div>';

			redirectJS('index.php', 3);

			exit();
		}
		$errors['db_error'] = 'Erreur interne, merci de réessayer à nouveau';
	}
}

?>

    <!--content-->
<div class="contact">
    <div class="container">
        <div class="contact-top">
            <h3>Nous contacter</h3>
        </div>

        <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger" role="alert">
            <ul>
                <?php
						foreach($errors as $error) {
							echo '<li>'.$error.'</li>';
						}
				?>
            </ul>
        </div>
        <?php } ?>

<form class="form-horizontal" action="" method="POST" novalidate>
    <div class="form-group <?= !empty($errors['lastname']) ? 'has-error' : '' ?>">
        <label for="lastname" class="col-sm-2 control-label">Nom</label>
        <div class="col-sm-3">
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Votre nom" value="<?= $lastname ?>">
        </div>
    </div>

    <div class="form-group <?= !empty($errors['firstname']) ? 'has-error' : '' ?>">
        <label for="firstname" class="col-sm-2 control-label">Prénom</label>
        <div class="col-sm-3">
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?= $firstname ?>">
        </div>
    </div>

    <div class="form-group <?= !empty($errors['email']) ? 'has-error' : '' ?>">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
            <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" value="<?= $email ?>">
        </div>
    </div>

    <div class="form-group <?= !empty($errors['message']) ? 'has-error' : '' ?>">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-5">
            <textarea id="message" name="message" class="form-control" placeholder="Votre message"><?= $message ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
					<input type="checkbox" id="newsletter" name="newsletter" value="1"> S'abonner à la newsletter
				</label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Envoyer</button>
        </div>
    </div>
</form>

<div class="address">

    <div class="col-md-4 address-more">
        <h4>Adresse</h4>
        <div class="address-grid">
            <i class="glyphicon glyphicon-globe"></i>
            <div class="address1">
                <p><em>82 avenue Denfert-Rochereau</em></p>
                <p><em>75014 Paris</em></p>
                <p><em>France</em></p>

	<!-- On ajoute le bouton Skype -->
<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js">
</script>
	<div id="SkypeButton_Call_webforce3_1">

	<script type="text/javascript">
        Skype.ui({
            "name": "call",
            "element": "SkypeButton_Call_webforce3_1",
            "participants": ["webforce3"],
            "imageSize": 24
        });
    </script>
	</div><br>


		</div>

<div class="clearfix"> </div>
</div>

<div class="clearfix"> </div>
</div>

</div>

<div class="col-md-8 map">
    <div style="width: 100%">

	<!-- On intègre une carte Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    var myCenter = new google.maps.LatLng(48.836855, 2.334477);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.HYBRID
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
                position: myCenter,
            }

        );
        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({

            content: "<strong>Webforce3 | Département musique</strong><br> 82 avenue Denfert-Rochereau<br> 75014 Paris, France"
        });

        infowindow.open(map, marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" style="width:100%;height:280px;"></div>

								</div><br />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .contact -->
    <!--//content-->

<?php require_once 'partials/footer.php' ?>