<?php
	//Fetches the client IP address

	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip_address = $_SERVER['HTTP_CLIENT_IP'];
	}

	else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	else {
		$ip_address = $_SERVER['REMOTE_ADDR'];
	}

	echo $ip_address;

?>