<?php
	include 'helperMethods.php';

	/*Merges two or more arrays*/
		//$merged = array_merge(array1, array2, [, array ...]);

	$first	= array("The", "quick", "brown", "fox");
	$second	= array("jumped", "over", "the", "moon");

	printf("First array: \n");
	PrintArray($first, 1);

	printf("Second array: \n");
	PrintArray($second, 1);

	$merged = array_merge($first, $second);
	printf("Merged array: \n");
	PrintArray($merged, 0);
?>