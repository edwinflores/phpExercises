<?php
	//Returns the Scheme, Host, Path of a particular URL

	$url = 'http://en.wikipedia.org/wiki/Potato';
	$url=parse_url($url);
	echo 'Scheme : ' . $url['scheme'] . '<br />';
	echo 'Host : ' . $url['host'] . '<br />';
	echo 'Path : ' . $url['path'] . '<br />';
?>