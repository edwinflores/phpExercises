<?php
	include 'helperMethods.php';

	/*Removes or Inserts elements in an array
		and optionally create another array from the removed elements*/
			//$removed = array_splice(array, start [, length [, replacement ]]);

	$languages	= array("c#", "objective-c", "java", "php", "ruby", "actionscript", "python");

	printf("Original Array Elements: \n");
	PrintArray($languages, 1);

	printf("\tRemove values w/ length specified: \n");
	$removed = array_splice($languages, 2, 3);
	PrintArray($removed, 1);

	printf("\tRemove values w/o length specified: \n");
	$removed = array_splice($languages, 2);
	PrintArray($removed, 1);

	printf("\tInsert values where others were removed: \n");
	$new = array("Italian", "Spanish", "Latin");
	array_splice($languages, 4, 3, $new);
	PrintArray($languages, 1);

	printf("\tInsert new elements w/o deleting: \n");
	$neo = array("Russian", "Filipino");
	array_splice($languages, 2, 0, $neo);
	PrintArray($languages, 1);
?>