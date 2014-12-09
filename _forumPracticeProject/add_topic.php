<?php
	$host		= "localhost";
	$db_username= "rei";
	$db_password= "brs";
	$db_name 	= "forumTest";
	$db_tbl_name= "forum_question";

	//Connect to server and select database
	mysql_connect("$host", "$db_username", "$db_password") or die("Failed to connect");
	mysql_select_db("$db_name")	or die("Cannot connect to database");

	//Fetch data from form
	$topic	= $_POST['topic'];
	$detail	= $_POST['detail'];
	$name 	= $_POST['name'];
	$email	= $_POST['email'];

	$datetime = date("d/m/y h:i:s");

	$sql = "INSERT INTO $db_tbl_name(topic, detail, name, email, datetime) VALUES('$topic','$detail','$name','$email','$datetime')";
	$result=mysql_query($sql);

	echo $result;
	
	if($result){
		echo "Succesful<BR>";
		echo "<a href=main_forum.php>View your topic</a>";
	} else {
		echo "ERROR";
	}

	mysql_close();
?>