<?php
	// Generates random unique numbers within a certain range

	$n = range(7, 22);
	shuffle($n);
	for ($x=0; $x<10; $x++){
		echo $n[$x] . ' ';
	}
?>