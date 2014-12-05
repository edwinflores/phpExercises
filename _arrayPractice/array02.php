<?php
	// Sorts and array and goes through it using a foreach
	$lnc = array('Cry', 'Jund', 'Red', 'Snake', 'Scott', 'Ziegs', 'Cheyenne');

	foreach ($lnc as $x){
		echo "$x, ";
	}

	sort($lnc);
	echo "<ul>";

	foreach($lnc as $y){
		echo "<li>$y</li>";
	}
	echo "<ul>";
?>