<?php
	//A function that checks if a string is a palindrome

	function palindromeCheck($string){
		if ($string == strrev($string))
			return 1;
		else
			return 0;
	}

	$a = palindromeCheck('racecar');

	if ($a == 0){
		echo "This is not a palindrome.";
	} else {
		echo "This is a palindrome.";
	}
?>