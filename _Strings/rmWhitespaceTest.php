<?php
	$string = "	Octocat is awesome!	";
	$str1 = ltrim($string);
	$str2 = rtrim($string);
	$str3 = trim($string);

	$record = "	Peter\tParker\t35\tGwen\t	\n";
	$record = trim($record, " \r\n\0\x0b");

	echo $str1 . "\n";
	echo $str2 . "\n";
	echo $str3 . "\n";

	echo $record . "\n";
?>
