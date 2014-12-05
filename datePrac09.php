<html>
<?php
	//Add or Subtract number of days from a specific date

	$dt = '2014-12-5';
	echo 'Original date : ' . $dt . '<br />';

	$no_days = 40;
	
	$bdate = strtotime("-" . $no_days . " days", strtotime($dt));
	$adate = strtotime("+" . $no_days . " days", strtotime($dt));

	echo 'Before 40 days : ' . date("Y-m-d", $bdate) . '<br />';
	echo 'After 40 days : ' . date("Y-m-d", $adate) . '<br />';
?>
</html>