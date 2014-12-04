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

	if($_SERVER['REQUEST_METHOD'] = "POST"){	//Additional if to help keep the page secure
		
		$details = mysql_real_escape_string($_POST['details']);
		$time	 = strftime("%X");
		$date	 = strftime("%B %d, %Y");
		$decision= "no";

		mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
		mysql_select_db("first_db") or die("Cannot connect to database");

		foreach($_POST['public'] as $each_check){ //fetch the data from the checkbox
			if($each_check != null){	//checks whether the checkbox is checked
				$decision = "yes";
			}
		}

		mysql_query("INSERT INTO list (details, date_posted, time_posted, public)
								VALUES ('$details', '$date', '$time', '$decision')");

		header("location: lobbyScreen.php");
	} else {
		header("location: lobbyScreen.php");
	}
?>