<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

$current_page = basename($_SERVER['PHP_SELF']);

session_name('music_session');
session_start();

$pages = array(
	'<i class="glyphicon glyphicon-home"></i>Accueil' => 'index.php',
	'<i class="glyphicon glyphicon-globe"></i>News' => 'news.php',
	'<i class="glyphicon glyphicon-headphones"></i>Revues' => 'reviews.php',
	'<i class="glyphicon glyphicon-envelope"></i>Contact' => 'contact.php',
	'<i class="glyphicon glyphicon-edit"></i>S\'enregistrer' => 'register.php',
	'<i class="glyphicon glyphicon-check"></i>S\'identifier' => 'login.php',
);

$query = $db->query('SELECT * FROM style ORDER BY style_name ASC');
$styles = $query->fetchAll();

if(!empty($_SESSION)){
	$pages['<i class="glyphicon glyphicon-share"></i>Se déconnecter'] = 'logout.php';
	unset($pages['s\'enregistrer']);
	unset($pages['s\'identifier']);
}