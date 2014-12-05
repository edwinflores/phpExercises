<?php
	//Calculates the difference between two dates
	
	$startDate = "1994-07-22";
	$endDate   = "2014-12-05";

	$date_diff = abs(strtotime($endDate) - strtotime($startDate));
	$years = floor($date_diff / (365*60*60*24));
	$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));

	printf("%d years, %d months, %d days", $years, $months, $days);
?>