<?php
	$string = 'hippopotomonstrosesquipedaliophobia';

	printf("The word is: %s \n", $string);

	for ($i=0; $i < strlen($string); $i++) {
		printf("The %dth character is %s", $i, $string{$i});

		if (($i % 2) > 0) { echo "\n"; }
		else {echo "	";}
	}

	echo "\n";
?>
