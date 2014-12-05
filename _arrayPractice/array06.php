<?php
	// Demos how to insert into an array
	$original = array('a', 'b', 'c', 'd', 'e');
	echo 'Orginal array: <br />';

	foreach ($original as $x){
		echo "$x ";
	}

	$toInsert = 'Z';
	array_splice($original, 3, 0, $toInsert);
	echo "<br /> After inserting 'Z' the array is : <br />";

	foreach($original as $x){
		echo "$x ";
	}
?>