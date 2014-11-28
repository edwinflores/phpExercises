<?php
function patternsAreFun($num) {
	$tmp=$num/2;
	for ($x = 0; $x < $num; $x++) {
		echo "#";
		for ($y = 0; $y < $tmp; $y++) {
			echo "*";
		}
		echo "#" . "\n";
	}
}
patternsAreFun(100);
?>
