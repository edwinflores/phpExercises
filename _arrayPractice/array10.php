<?php
	function array_change_value_case($input, $ucase){
		$case = $ucase;
		$narray = array();

		if (!is_array($input)){
			return $narray;
		}

		foreach ($input as $key => $value){
			if(is_array($value)){
				$narray[$key] = array_change_value_case($value, $case);
				continue;
			}

			$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
		}
		return $narray;
	}

	$colors = array('a' => 'Blue', 'b' => 'Green', 'c' => 'Red');
	echo 'Actual array </br>';
	print_r($colors);
	echo '</br>Values are lower cased.</br>';
	$myColor = array_change_value_case($colors, CASE_LOWER);
	print_r($myColor);
	echo '</br>Values are upper cased.</br>';
	$myColor = array_change_value_case($colors, CASE_UPPER);
	print_r($myColor);
?>