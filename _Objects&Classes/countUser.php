<html>
	<head>Count User</head>

<?php
	include 'counterClass.php';
	
	$count = new Counter();

	echo "First Call: <br />";
	echo Counter::getCount() . '<br />';

	$next = new Counter();

	echo "Second Call(different object instance): <br />";
	echo Counter::getCount() . '<br />';

	$third = new Counter();

	echo "Third Call(also a different instance): <br />";
	echo Counter::getCount() . '<br />';

?>

</html>