<html>
<?php
	
	$db_username 	= "rei";
	$db_password	= "brs";
	$db_database	= "first_db";

	session_start();
	$username	= mysql_real_escape_string($_POST['username']);
	$password	= mysql_real_escape_string($_POST['password']);

	mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
	mysql_select_db($db_database) or die ("Can't connect to database");

	$query = mysql_query("SELECT * FROM users WHERE username='$username'");

	$exists = mysql_num_rows($query);	//Checks is username exists
	$table_users = "";
	$table_password = "";

	if($exists > 0) { //Checks if there are no returning rows or no existing username
		while($row = mysql_fetch_assoc($query)){
			$table_users 	= $row['username'];
			$table_password	= $row['password'];
		}

		if(($username == $table_users) && ($password == $table_password)) {
			if($password == $table_password){
				$_SESSION['user'] = $username;
				header("location: lobbyScreen.php");
			}
		} else {
			Print '<script>alert("Incorrect Password!");</script>';
			Print '<script>window.location.assign("login.php");</script>';
		}
	} else {
		Print '<script>alert("Incorrect username!");</script>';
		Print '<script>window.location.assign("login.php");</script>';
	}
?>
</html>