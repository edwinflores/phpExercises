<?php
	//Gets yesterday's date

	$dt = new DateTime();
	$dt->sub(new DateInterval('P1D'));
	echo $dt->format('F j, Y');
?>