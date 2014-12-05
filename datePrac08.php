<?php
	//Check if a date is a weekend or not
	$dt = '2014-12-6';

	$dt1 = strtotime($dt);
	$dt2 = date("1", $dt1);
	$dt3 = strtolower($dt2);

	if(($dt3 == "saturday") || ($dt3 == "sunday")){
		echo $dt3 . ' is a weekend';
	} else {
		echo $dt3 . ' is not a weekend';
	}
?>