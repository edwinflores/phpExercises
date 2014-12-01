<?php
include 'helperMethods.php';

/* The Basics */

/* Adding Values to the End of an Array */
$team = array("Ib", "Garry");
$team = "Mary";

/* Assigning a Range of Values */
$numbers 			= range(2, 5);		// contents: (2, 3, 4, 5)
$letters 			= range('a', 'z');	// holds the alphabet
$reversedNumbers 	= range(5, 2);		// contents: (5, 4, 3, 2)

/* Getting the Size of an Array */
$teamSize = count($team);				// $teamSize = 3

/* Padding an Array */
$scores = array(5, 10);
$paddedScores = array_pad($scores, 5, 0);	//$paddedScores contains (5, 10, 0, 0, 0)
$paddedScores2 = array_pad($scores, -5, 0); //$paddedScores2 contains (0, 0, 0, 5, 10)

/* Multidimensional Arrays */
$row0	= array(1, 2, 3);
$row1	= array(4, 5, 6);
$row2	= array(7, 8, 9);
$multi 	= array($row0, $row1, $row2);

$value 	= $multi[2][0];					// row 2, column 0. $value = 7

/*Outputs*/
printf("$team Array Contents: \n");
PrintArray($team);
echo "\n";

printf("$team Member Count: \n");
print($teamSize);
echo "\n";

printf("Ranged Array Contents: \n");
PrintArray($numbers, 0);
PrintArray($letters, 0);
PrintArray($reversedNumbers, 0);
echo "\n";

printf("Padded Array Contents: \n");
PrintArray($scores, 0);
PrintArray($paddedScores, 0);
PrintArray($paddedScores2, 0);
echo "\n";

printf("Multidimensional Array Extract: \n");
print($value);
echo "\n";
?>