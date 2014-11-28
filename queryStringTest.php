<?php
	$baseUrl = 'http://www.google.com/q=';
	$query = 'Why did the chicken cross the road -cookies';
	$url = $baseUrl . urlencode($query);
	echo $url . "\n";
?>
