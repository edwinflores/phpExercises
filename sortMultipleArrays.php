<?php
	/*Sorts multiple indexed arrays at once*/
		//array_multisort(array1, [, array2, ... ]);

	$names	= array("Tom", "Dick", "Harriet", "Brenda", "Joe");
	$ages	= array(25,		35		,29			,35		,35);
	$zips	= array(80522, 02140, 90210, 64141, 80522);

	array_multisort($ages, SORT_ASC, $zips, SORT_DESC, $names, SORT_ASC);

	printf("Sorted Arrays: \n");
	for ($i = 0; $i < count($names); $i++) {
		echo "{$names[$i]}, {$ages[$i]}, {$zips[$i]}\n";
	}
?>