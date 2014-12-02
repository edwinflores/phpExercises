<?php
	//initialize authentication variables
	$user		="rei";
	$password	="brs";
	$database	="practiceDB";

	//connecting to the database
	mysql_connect('localhost', $user, $password);
	@mysql_select_db($database) or die("Unable to select database");

	//preparing the query
	$query="CREATE TABLE contacts 	(id 	int(6) 		NOT NULL auto_increment,
									first 	varchar(15) NOT NULL,
									last 	varchar(15) NOT NULL,
									phone 	varchar(20) NOT NULL,
									mobile 	varchar(20) NOT NULL,
									fax 	varchar(20) NOT NULL,
									email 	varchar(30) NOT NULL,
									web 	varchar(30) NOT NULL,
									PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))";

	//calls the prepared query
	mysql_query($query);
	mysql_close();
?>