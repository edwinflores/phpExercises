<?php
	include 'helperFunctions.php';

	$fool		=	"Yu";
	$chariot	=	"Chie";
	$star		=	"Kuma";
	$emperor	=	"Kanji";
	$magician	=	"Yosuke";

	/*Creates an array from given variable names*/
	$teamYasogami	=	compact(
							"fool",
							"chariot",
							"star",
							"emperor",
							"magician"
						);

	printf("Source variables: \n");
	echo 	"\t\$fool: \t\t\t" 		. $fool 	. "\n" .
			"\t\$chariot: \t\t" 	. $chariot 	. "\n" .
			"\t\$star: \t\t\t" 		. $star 	. "\n" .
			"\t\$emperor: \t\t" 	. $emperor 	. "\n" .
			"\t\$magician: \t\t" 	. $magician . "\n" ;

	printf("Compacted array: \n");
	print_r($teamYasogami);
	echo "\n";
?>