<html>
	<head>
		<title>Hey, welcome!</title>
	</head>
	<body>
		<?php
			$db_username 	= "rei";
			$db_password	= "brs";
			$db_database	= "first_db";

			echo "<p>Hello World!</p>";
		?>
		<a href="login.php"> Login here!
		<a href="register.php"> Register here! </a>
	</body>
	<br/>
	<h2 align="center">List</h2>
	<table width="100%" border="1px">
		<tr>
			<th>Id</th>
			<th>Details</th>
			<th>Post Time</th>
			<th>Edit Time</th>
		</tr>
		<?php
			mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
			mysql_select_db($db_database) or die("Cannot connect to the database");
			$query = mysql_query("SELECT * FROM list WHERE public='yes'");
			while($row = mysql_fetch_array($query)){
				echo "<tr>";
					echo '<td align="center">' . $row['id'] . "</td>";
					echo '<td align="center">' . $row['details'] . "</td>";
					echo '<td align="center">' . $row['date_posted'] . " - " . $row['time_posted'] . "</td>";
					echo '<td align="center">' . $row['date_edited'] . " - " . $row['time_edited'] . "</td>";
				echo "</tr>";
			}
		?>
	</table>
</html>