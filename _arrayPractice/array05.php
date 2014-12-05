<?php
	//Just a simple demo of json_decode
	
	function Display($value, $key){
		echo "$key : $value<br />";
	}

	$a = '{"Title": "Bioshock Infinite",
			"Studio": "Irrational Games",
			"Detail":
			{
				"Publisher": "2K Games"
			}
			}';

	$decoded = json_decode($a, true);
	array_walk_recursive($decoded, "Display");
?>