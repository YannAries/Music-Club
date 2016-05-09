<?php

$pass = !empty($_GET['pass']) ? $_GET['pass'] : '';

if (empty($pass)) {
	exit('Empty password');
}

echo password_hash($_GET['pass'], PASSWORD_BCRYPT);