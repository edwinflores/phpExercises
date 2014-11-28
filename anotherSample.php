<?php
function doubler($value) {
	return $value << 1;
}

function outer($a) {
	function inner($b){
		echo "there $b";
	}
	echo "$a, hello ";
}

echo  "A pair of 13s is " . doubler(13) . "\n";
outer("well");
inner("reader");
?>
