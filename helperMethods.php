<?php
//Simply prints the elements of an array
	//type is:
	# 0 for one element each line
	# 1 for one element separated by comma
	# default is still under construction
function PrintArray($toPrint, $type){
	print("#------------------------------# \n");
	switch ($type) {
		case '0':
			foreach ($toPrint as $member) {
				echo $member . "\n";
			}
			break;

		case '1':
			foreach ($toPrint as $member) {
				echo $member . ", ";
			}
			echo "\n";
			break;

		default:
			break;
	}
	
	print("#------------------------------# \n");
}

/*Variable Length Version (Only usable in PHP 5.6+)*/
/*Well I wasted time trying to be convenient for myself*/
	/*function PrintArray(...array $toPrint){

		foreach ($toPrint as $arrayPrint) {
			foreach ($arrayPrint as $member) {
				echo $member . "\n";
			}
		}
	}*/
?>