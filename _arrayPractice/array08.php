<?php
	// Calculates the average and shows the seven lowest and highest

	$test_scores = "86, 90, 76, 80, 72, 73, 82, 95, 87, 83,
						55, 56, 53, 91, 74, 91, 72, 62, 70, 57,
						61, 94, 75, 100, 76, 58, 83, 97, 52, 58,
						96, 81, 61, 62, 95, 59, 56, 100, 99, 67";

	$temp_array = explode(',', $test_scores);
	$totalScore = 0;
	$temp_array_length = count($temp_array);

	foreach($temp_array as $score){
		$totalScore += $score;
	}

	$avg_high_score = $totalScore/$temp_array_length;

	echo "Average Score is:" . "$avg_high_score" . "<br>";

	$as = asort($temp_array);
	echo "<br> List of ten lowest scores : ";
	for ($i=0; $i<9; $i++){
		echo $as[$i] . ", ";
	}

	$ar = arsort($temp_array);
	echo "<br>List of ten highest scores : ";
	for ($i=0; $i<9; $i++){
		echo $ar[$i] . ", ";
	}
?>