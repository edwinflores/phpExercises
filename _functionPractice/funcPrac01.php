<?php
	function computeFactorial($n){
		if ($n == 0){
			return 1;
		}

		else{
			return $n * computeFactorial($n - 1);
		}
	}

	print_r(computeFactorial(6));
?>