<?php
include 'helperMethods.php';
	//How to copy an array's values into variables
	$teamAvatar = array("Korra", "Mako", "Bolin", "Asami");
	list($avatar, $firebender, $earthbender, $nonbender) = $teamAvatar;

	printf("Source Array: \n");
	PrintArray($teamAvatar, 0);

	printf("Extracted Values: \n");
	echo $avatar . "\n";
	echo $firebender . "\n";
	echo $earthbender . "\n";
	echo $nonbender . "\n";
	echo "\n";
?>