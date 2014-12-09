<?php
	$host		= "localhost";
	$db_username= "rei";
	$db_password= "brs";
	$db_name 	= "forumTest";
	$db_tbl_name= "forum_question";

	//Connect to server and select database
	mysql_connect("$host", "$db_username", "$db_password") or die("Failed to connect");
	mysql_select_db("$db_name")	or die("Cannot connect to database");

	$id=$_GET['id'];
	$query="SELECT * FROM $db_tbl_name WHERE id = '$id'";
	$result=mysql_query($query);
	$rows=mysql_fetch_array($result);
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
		<tr>
		<td bgcolor="#F8F7F1"><strong><?php echo $rows['topic']; ?></strong></td>
		</tr>

		<tr>
		<td bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
		</tr>

		<tr>
		<td bgcolor="#F8F7F1"><strong>By:</strong><?php echo $rows['name']; ?>
			<strong>Email: </strong><? echo $rows['email']; ?></td>
		</tr>

		<tr>
		<td bgcolor="#F8F7F1"><strong>Date/time: </strong><?echo $rows['datetime']; ?></td>
		</tr>
	</table></td>
	</tr>
</table>
<BR>

<?php
	$db_tbl_name2="forum_answer";
	$query2="SELECT * FROM $db_tbl_name2 WHERE question_id='$id'";
	$result2=mysql_query($query2);

	while($rows=mysql_fetch_array($result2)){
	?>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
				<tr>
					<td bgcolor="#F8F7F1"><strong>ID</strong></td>
					<td bgcolor="#F8F7F1">:</td>
					<td bgcolor="#F8F7F1"><?php echo $rows['a_id']; ?></td>
				</tr>
				<tr>
				<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
				<td width="5%" bgcolor="#F8F7F1">:</td>
				<td width="77%" bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
				</tr>

				<tr>
				<td bgcolor="#F8F7F1"><strong>Email</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['a_name']; ?></td>
				</tr>

				<tr>
				<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['a_answer']; ?></td>
				</tr>

				<tr>
				<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
				<td bgcolor="#F8F7F1">:</td>
				<td bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
				</tr>

			</table></td>
			</tr>
		</table><br>
	<?php
	}

	$query3="SELECT view FROM $db_tbl_name WHERE id='$id'";
	$result3=mysql_query($query3);
	$rows=mysql_fetch_array($result3);
	$view=$rows['view'];

	if(empty($view)){
		$view=1;
		$query4="INSERT INTO $db_tbl_name(view) VALUES('$view') WHERE id='$id'";
		$result4=mysql_query($query4);
	}

	$addview=$view+1;
	$query5="UPDATE $db_tbl_name SET view='$addview' WHERE id='$id'";
	$result5=mysql_query($query5);
	mysql_close();
	?>

	<BR>
		<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<form name="form1" method="POST" action="add_answer.php">
				<td>
				<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
					<tr>
					<td width="18%"><strong>Name</strong></td>
					<td width="3%">:</td>
					<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
					</tr>

					<tr>
					<td><strong>Email</strong></td>
					<td>:</td>
					<td><input name="a_email" type="text" id="a_email" size="45"></td>
					</tr>

					<tr>
					<td valign="top"><strong>Answer</strong></td>
					<td valign="top">:</td>
					<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
					</tr>

					<tr>
					<td>&nbsp;</td>
					<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
					<td><input type="submit" name="Submit" value="Submit"><input type="reset" name="Submit2" value="Reset"></td>
					</tr>
				</table>
				</td>
			</form>
			</tr>
		</table>