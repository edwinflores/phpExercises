<html>
	<head>
		<title>The Lobby Screen</title>
	</head>
	<?php
		$db_username 	= "rei";
		$db_password	= "brs";
		$db_database	= "first_db";

		session_start();
		if($_SESSION['user']) {
		} 
		else{
			header("location: homeScreen.php");
		}

		$user = $_SESSION['user'];
	?>

	<body>
		<h2>Lobby Page</h2>

<hello>! </hello>
<!--Display user information-->
		<a href="logout.php">Click here to logout</a><br/><br/>
		<form action="add.php" method="POST">
			Add more to list: <input type="text" name="details" /><br/>
			Public post? <input type="checkbox" name="public[]" value="yes" /> <br/>
			<input type="submit" value="Add to list"/>
		</form>

	<h2 align="center">My list</h2>
	<table width="100%" border="1px">
		<tr>
			<th>Id</th>
			<th>Details</th>
			<th>Post Time</th>
			<th>Edit Time</th>
			<th>Edit</th>
			<th>Delete</th>
			<th>Public Post</th>
		</tr>
		<?php
			mysql_connect('localhost', $db_username, $db_password) or die(mysql_error());
			mysql_select_db($db_database) or die("Can't connect to database");

			$query = mysql_query("SELECT * FROM list");

			while($row = mysql_fetch_array($query)){
				Print "<tr>";
					Print '<td align="center">' . $row['id'] . "</td>";
					Print '<td align="center">' . $row['details'] . "</td>";
					Print '<td align="center">' . $row['date_posted'] . " - " . $row['time_posted'] ."</td>";
					Print '<td align="center">' . $row['date_edited'] . " - " . $row['time_edited'] ."</td>";
					Print '<td align="center"><a href="edit.php?id='. $row['id'] . '">edit</a> </td>';
					Print '<td align="center"><a href="#" onclick="confirmationPrompt('.$row['id'].')">delete</a></td>';
					Print '<td align="center">' . $row['public'] . "</td>";
				Print "</tr>";
					
			}
		?>
	</table>
	<!--Java Script code denoted by <script>-->
	<script>
		function confirmationPrompt(id){
			var r=confirm("Are you certain you wish to delete this record?");
			if (r==true){
				window.location.assign("delete.php?id=" + id);
			}
		}
	</script>
	</body>	
</html>