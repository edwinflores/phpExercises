<?php
	include 'helperMethods.php';

	function arrayUnion($a, $b){
		$union = array_merge($a, $b);
		$union = array_unique($union);

		return $union;
	}

	$first	= array(1, "two", 3);
	$second	= array("two", "three", "four");

	$union 	= arrayUnion($first, $second);

	printf("First array: \n");
	PrintArray($first, 1);

	printf("Second array: \n");
	PrintArray($second, 1);

	printf("Joint array: \n");
	PrintArray($union, 1);
?>