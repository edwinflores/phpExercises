<?php
	echo addcslashes("hello\tworld\n", "\x00..\x1fz..\xff") . "\n".

	$string = stripcslashes('hello\tworld\n');

	echo "$string \n";
?>
