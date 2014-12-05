<?php
	//Counts the number a particular letter occurs in a given string
	
	$text = "hippopotomonstrosesquipedaliophobia";
	$search_char = "p";
	$count = "0";

	for ($x="0"; $x<strlen($text); $x++){
		if(substr($text, $x, 1) == $search_char){
			$count = $count+1;
		}
	}

	echo $count;
?>