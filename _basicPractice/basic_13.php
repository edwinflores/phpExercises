<?php
	//Counts the number of lines in a file
	$file = "basic_12.php";
	$no_of_lines = count(file($file));
	echo "There are $no_of_lines lines in $file";
?>