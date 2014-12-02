<?php
	//declare and assign basic information
	$username="rei";
	$password="brs";
	$database="practiceDB";

	//declare values to be inserted
	$first 	=$_POST['first'];
	$last 	=$_POST['last'];
	$phone 	=$_POST['phone'];
	$mobile =$_POST['mobile'];
	$fax 	=$_POST['fax'];
	$email 	=$_POST['email'];
	$web 	=$_POST['web'];

	//starts a database connection
	mysql_connect('localhost', $username, $password);

	//selects a database to be used
	@mysql_select_db($database) or die("Unable to select database");

	//prepare insertion command
	$query="INSERT INTO contacts VALUES ('','$first','$last',				
										'$phone',				
										'$mobile',				
										'$fax',					
										'$email',		
										'$web')";	

	//runs the command
	mysql_query($query);

	mysql_close();

	echo "You have been registered!";
?>