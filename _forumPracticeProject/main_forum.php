<?php
	$host		= "localhost";
	$db_username= "rei";
	$db_password= "brs";
	$db_name 	= "forumTest";
	$db_tbl_name= "forum_question";

	//Connect to server and select database
	mysql_connect("$host", "$db_username", "$db_password") or die("Failed to connect");
	mysql_select_db("$db_name")	or die("Cannot connect to database");

	$query="SELECT * FROM $db_tbl_name ORDER BY id DESC";
	$result = mysql_query($query);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
	<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
	<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
	<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
	<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
	<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
	</tr>

	<?php
	while($rows=mysql_fetch_array($result)){
	?>
	<tr>
	<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
	<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php
		echo $rows['topic']; ?></a><BR></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
	<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
	</tr>

	<?php
	}
	mysql_close();
	?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php">
		<strong>Create New Topic</strong></a></td>
</tr>
</table>