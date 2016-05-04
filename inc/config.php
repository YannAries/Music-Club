<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

session_name('music_session');
session_start();

$current_page = basename($_SERVER['PHP_SELF']);

$pages = array(
	'Home' => 'index.php',
	'News' => 'news.php',
	'Contact' => 'contact.php',
);