<?php
	//Shows the different ways of sorting

	$teamYaso = array("Yu" => "Fool", "Yosuke" => "Magician",
					"Chie" => "Chariot", "Yukiko" => "Priestess",
					"Kanji" => "Emperor", "Naoto" => "Sun",
					"Rise" => "Lovers", "Teddy" => "Star");
	print_r($teamYaso);
	echo "<br />";

	echo "<br>Order sort by Value<br>";
	$yasoByValue = $teamYaso;
	asort($yasoByValue);
	foreach ($yasoByValue as $a => $a_value) {
		echo "Arcana of " . $a . " is : " . $a_value . "<br>";
	}

	echo"<br>Order sort by Key<br/>";
	$yasoByKey = $teamYaso;
	ksort($yasoByKey);
	foreach ($yasoByKey as $b => $b_value) {
		echo "Arcana of " . $b . " is : " . $b_value . "<br>";
	}

	echo "<br>Descending order sort by Value<br/>";
	$yasoByValueRev = $teamYaso;
	arsort($yasoByValueRev);
	foreach ($yasoByValueRev as $c => $c_value) {
		echo "Arcana of " . $c . " is : " . $c_value . "<br>";
	}

	echo "<br>Descending order sort by Key<br/>";
	$yasoByKeyRev = $teamYaso;
	krsort($yasoByKeyRev);
	foreach ($yasoByKeyRev as $d => $d_value) {
		echo "Arcana of " . $d . " is : " . $d_value . "<br>";
	}
?>