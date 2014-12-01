<?php
	include 'helperMethods.php';

	/*Identifies values from one array that aren't present in the other*/
		//$diff = array_diff(array1, array2 [, array ...]);

	$a1 	= array("bill", "claire", "ella", "simon", "judy");
	$a2 	= array("jack", "claire", "toni");
	$a3 	= array("ella", "simon", "garfunkel");

	printf("First array: \n");
	PrintArray($a1, 1);

	printf("Second array: \n");
	PrintArray($a1, 1);

	printf("Third array: \n");
	PrintArray($a1, 1);

	printf("Values from the first that aren't in the second or third: \n");
	$difference = array_diff($a1, $a2, $a3);
	PrintArray($difference, 1);
?>