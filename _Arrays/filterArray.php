<?php
	include 'helperMethods.php';
	/*Identifies a subset of an arary based on its values*/
		//$filtered = array_filter(array, callback);

	function isOdd($element)
	{
		return $element % 2;
	}

	$nums 		= array(9, 23, 24, 27, 12, 11, 7, 22);
	$oddNums	= array();
	$oddNums 	= array_filter($nums, isOdd());

	printf("Original array: \n");
	PrintArray($nums, 1);

	printf("Filtered array(Keeping odd numbers): \n");
	PrintArray($oddNums, 1);
?>