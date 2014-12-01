<html>
<?php
	include 'VehicleObject.php';

	echo "Testing the VehicleObject class: " . '<br />';

	//creating a new vehicle object
	$vehicle 			= new Vehicle;
	$vehicle->brand 	= 'Ford';
	$vehicle->shape 	= 'Coupe';
	$vehicle->color 	= 'Black';
	$vehicle->num_doors = 4;
	$vehicle->price 	= 100000;

	//Calling Vehicle's methods
	$vehicle->showPrice();
	$vehicle->showNumDoors();
	$vehicle->drive();
	echo "<br /><br />";
?>
</html>