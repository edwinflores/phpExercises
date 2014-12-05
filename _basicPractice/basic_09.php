<?php
	//changes the color of the first character of a word
	$text = 'The cake is a lie.';
	$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);
	echo $text;
?>