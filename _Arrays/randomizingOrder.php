<?php
	include 'helperMethods.php';

	/*Randomizes the order of elements in an array*/
		//shuffle(array);

	printf("Original Array: \n");
	$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
	PrintArray($weekdays, 1);

	printf("Reversed Array: \n");
	shuffle($weekdays);
	PrintArray($weekdays, 1);


	printf("Reversed Array 2nd Run: \n");
	shuffle($weekdays);
	PrintArray($weekdays, 1);

	printf("Reversed Array 3rd Run: \n");
	shuffle($weekdays);
	PrintArray($weekdays, 1);
?>