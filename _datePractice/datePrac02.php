<?php
	//Creates a countdown to a certain date

	$target_days = mktime(0,0,0,7,22,2015);
	$today = time();
	$diff_days = ($target_days - $today);
	$days = (int)($diff_days/86400);

	echo "Days until next birthday: $days days!";
?>