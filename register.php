<html>
	<head>
		<title>The Registration Page</title>
	</head>
	<body>
		<h2>Registration Page</h2>
		<a href="homeScreen.php">Click here to go back</a><br /><br />
		<form action="register.php" method="POST">
			Enter Username: <input type="text" name="username" required="required" /> <br />
			Enter Password:	<input type="password" name="password" required="required" /> <br />
			<input type="submit" value="Register"/>
		</form>
	</body>

	<?php

	$db_username 	= "rei";
	$db_password	= "brs";
	$db_database	= "first_db";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$bool = true;

		mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
		mysql_select_db($db_database) or die("Cannot connect to database");

		$query = mysql_query("SELECT * FROM USERS");

		while ($row = mysql_fetch_array($query)) {
			$table_users = $row['username'];
			if ($username == $table_users) {
				$bool = false;
				Print '<script>alert("Username has been taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}

		if($bool) {
			mysql_query("INSERT INTO users (username, password) VALUES ('$username','$password')");
			Print '<script>alert(Successfully Registered);</script>';
			Print '<script>window.location.assign("register.php");</script>';
		}

	}?>
</html>

