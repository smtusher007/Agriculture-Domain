<?php 

	require_once('../Controller/Header.php');
	session_start();
	setcookie('flag', 'true', time()-10, '/');
	header('location: Login.php');

?>