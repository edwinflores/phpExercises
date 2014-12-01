<?php
	include 'helperMethods.php';

	$names = array( "Chu"	, "Louis",
					"Tracey", "Terrance",
					"Mistle", "Dusty",
					"Twanda", "Natacha",
					"Landon", "Omer"
					);

	printf("Original Array: \n");
	PrintArray($names, 1);
	echo "\n";

	/*Sorts in ascending order*/
		//sort(array);
	/*Sorts by descending order*/
		//rsort(array);
	
	$ascSort = $names;
	sort($ascSort);
	printf("\tSorted by Ascending Order: \n");
	PrintArray($ascSort, 1);
	echo "\n";

	$desSort = $names;
	rsort($desSort);
	printf("\tSorted by Descending Order: \n");
	PrintArray($desSort, 1);
	echo "\n";	
?>