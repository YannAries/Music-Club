<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

$current_page = basename($_SERVER['PHP_SELF']);

$pages = array(
	'Home' => 'index.php',
	'News' => 'news.php',
	'Contact' => 'contact.php',
);

$query = $db->query('SELECT * FROM style ORDER BY style_name ASC');
$styles = $query->fetchAll();

// debug ($styles);