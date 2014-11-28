<?php
function counter() {
	static $count = 0;
	return $count++;
}

for ($i = 1; $i <= 10; $i++) {
	print counter();
}
?>
