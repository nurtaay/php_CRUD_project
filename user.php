<?php 
	require_once "db.php";

	session_start();

	$ONLINE = false;
	if(isset($_SESSION['NOW_USER'])){

		$ONLINE = true;
		
		define("USER_ONLINE", true);
		define('NOW_USER', $_SESSION['NOW_USER']);

	}else{

		define('USER_ONLINE', false);
	}
?>