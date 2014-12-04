<?php

	$db_username 	= "rei";
	$db_password	= "brs";
	$db_database	= "first_db";
	
	session_start();
	if($_SESSION['user']){
	}
	else {
		header("location: homeScreen.php");
	}

	if($_SERVER['REQUEST_METHOD'] == "GET"){
		mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
		mysql_select_db("first_db") or die("Cannot connect to the database");
		$id = $_GET['id'];
		mysql_query("DELETE FROM list WHERE id='$id'");
		header("location: lobbyScreen.php");
	}
?>