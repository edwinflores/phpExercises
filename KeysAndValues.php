<?php
include 'helperMethods.php';

/*Returns an array consisting of only the keys in the array in internal order*/
	//$arrayOfKeys = array_keys(array);

$brands 	= array('Hershey\'s' => "Kisses", 'Cadbury' => "Fruits and Nuts", 'Nestle' => "Kit Kat");
$products	= array_keys($brands);

printf("Array's Keys and Values: \n");
printf("\t Values \n");
PrintArray($brands, 0);
printf("\t Keys \n");
PrintArray($products, 0);
?>