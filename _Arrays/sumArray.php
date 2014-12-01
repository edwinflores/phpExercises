<?php
	include 'helperMethods.php';

	/*Adds up the values in an indexed or associative array*/
		//$sum = array_sum(array);

	printf("Score array: \n");
	$scores = array(12, 11, 7, 22);
	PrintArray($scores, 1);

	printf("Array sum: ");
	$total = array_sum($scores);
	echo $total . "\n";
?>