<?php
include 'helperMethods.php';

/* Extracts a subset from an array: */
 	//$subset = array_slice(array, offset, length);

$paydayGang = array("Dallas", "Chains", "Wolf", "Houston", "Hoxton");
$middle		= array_slice($paydayGang, 2, 2);

/* Divides an array into smaller, evenly sized arrays: */
	//$chunks = array_chunk(array, size [, preserve_keys]);

$numbers	= range(1,8);
$rows		= array_chunk($numbers, 3);

printf("Slicing an Array \n");
printf("\t Original Array: \n");
PrintArray($paydayGang);
printf("\t Subset Extracted: \n");
PrintArray($middle, 0);

printf("Splitting an Array into Chunks \n");
printf("\t Original Array: \n");
PrintArray($numbers, 0);
printf("\t Chunks: \n");
print_r($rows);
echo "\n";
?>