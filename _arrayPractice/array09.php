<?php
	//Merges the two arrays by index
	$array1 = array(array(3, 9), array(12, 11));
	$array2 = array("Hi", "Hello");

	function merge_arrays_by_index($x, $y){
		$temp = array();
		$temp[] = $x;

		if(is_scalar($y)){
			$temp[] = $y;
		} else {
			foreach($y as $a => $b){
				$temp[] = $b;
			}
		}
		return $temp;
	}

	echo '<pre>';
	print_r(array_map('merge_arrays_by_index', $array2, $array1));
?>