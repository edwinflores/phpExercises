<?php
	$host		= "localhost";
	$db_username= "rei";
	$db_password= "brs";
	$db_name 	= "forumTest";
	$db_tbl_name= "forum_answer";

	//Connect to server and select database
	mysql_connect("$host", "$db_username", "$db_password") or die("Failed to connect");
	mysql_select_db("$db_name")	or die("Cannot connect to database");

	//Fetch the value of id that sent from the hidden field
	$id=$_POST['id'];

	$query="SELECT MAX(a_id) AS Maxa_id FROM $db_tbl_name WHERE question_id='$id'";
	$result=mysql_query($query);
	$rows=mysql_fetch_array($result);

	if ($rows){
		$Max_id = $rows['Maxa_id']+1;
	} else {
		$Max_id=1;
	}

	$a_name = $_POST['a_name'];
	$a_email = $_POST['a_email'];
	$a_answer = $_POST['a_answer'];

	$datetime = date("d/m/y H:i:s");

	$query2 = "INSERT INTO $db_tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)
								VALUES ('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
	$result2 = mysql_query($query2);

	if($result2){
		echo "Successful<BR>";
		echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";

		$db_tbl_name2="forum_question";
		$query3="UPDATE $db_tbl_name2 SET reply='$Max_id' WHERE id='$id'";
		$result3=mysql_query($query3);
	} else {
		echo "ERROR";
	}

	mysql_close();
?>