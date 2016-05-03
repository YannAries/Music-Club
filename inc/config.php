<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

$current_page = basename($_SERVER['PHP_SELF']);

$pages = array(
	'Home' => 'index.php',
	'Random' => 'random.php',
	'Contact' => 'send.php',
	'Search' => 'search.php',
);