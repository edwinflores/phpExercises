<?php
	//Get time difference in days, years, months, days, hours, minutes, and seconds between two dates

	$date1 = new DateTime('1994-07-22 12:11:31');
	$date2 = $date1->diff(new DateTime('2014-12-5 2:21:55'));

	echo $date2->days . 'Total days<br>';
	echo $date2->y . ' years<br>';
	echo $date2->m . ' months<br>';
	echo $date2->d . ' days<br>';
	echo $date2->h . ' hours<br>';
	echo $date2->i . ' minutes<br>';
	echo $date2->s . ' seconds<br>';
?>