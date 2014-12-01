<?php
	include 'helperMethods.php';

	$heisters = array(
					'mastermind'	=> "Dallas",
					'enforcer' 		=> "Chains",
					'technician' 	=> "Wolf",
					'ghost' 	=> "Houston"
				);

	/*Creates local varaibles from an array*/

	extract($heisters);

	printf("Printed from variables created from array: \n");
	echo "\t\$mastermind \t\t" . $mastermind . "\n";
	echo "\t\$enforcer \t\t" . $enforcer . "\n";
	echo "\t\$technician \t\t" . $technician . "\n";
	echo "\t\$ghost \t\t\t" . $ghost . "\n";

	printf("Source array: \n");
	print_r($heisters);
	echo "\n";
?>