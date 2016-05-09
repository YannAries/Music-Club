<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

$current_page = basename($_SERVER['PHP_SELF']);

session_name('music_session');
session_start();

$pages = array(
	'Home' => 'index.php',
	'News' => 'news.php',
	'reviews' => 'reviews.php',
	'Contact' => 'contact.php',
	's\'enregistrer' => 'register.php',
	's\'identifier' => 'login.php', 
);

$query = $db->query('SELECT * FROM style ORDER BY style_name ASC');
$styles = $query->fetchAll();

// debug ($styles);

if(!empty($_SESSION)){
	$pages['se déconnecter'] = 'logout.php';
	unset($pages['s\'enregistrer']);
	unset($pages['s\'identifier']);
}