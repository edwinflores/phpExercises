<?php
function takesTwo($a, $b) {
	if (isset($a)) {
		echo " a is set\n";
	}

	if (isset($b)) {
		echo "b is set\n";
	}
}

echo "With two arguments:\n";
takesTwo(1, 2);

echo "With one argument:\n";
takesTwo(1);
?>
