<?php
	include 'helperMethods.php';

	/*reverses the internal order of elements in an array*/
		//$flipped = array_flip(array);

	$nums = range(1, 10);
	printf("Original Array: \n");
	PrintArray($nums, 0);
	echo "\n";

	$flippedNums = array_flip($nums);
	printf("Flipped Array: \n");
	PrintArray($flippedNums, 0);
	echo "\n";
?>