<?php
	//Gets the shortest and longest string length from an array

	$my_array = array("ab", "aabb", "aaabbb", "aaaabbbb", "aaaaabbbbb");
	$new_array = array_map('strlen', $my_array);
	echo "The shortest array length is " . min($new_array) . "<br />";
	echo "The longest array length is " . max($new_array) . "<br />";
?>