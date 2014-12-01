<html>
<?php
	include 'MotorcycleObject.php';

	echo "Testing the Motorcycle class, child of VehicleObject: <br />";
	
	//creating a new motorcycle object
	$motorsiklo				= new Motorcycle;
	$motorsiklo->brand 		= 'Yamaha';
	$motorsiklo->shape 		= 'Sportster';
	$motorsiklo->color 		= 'Red';
	$motorsiklo->num_doors 	= 0;
	$motorsiklo->price 		= 25000;

	$motorsiklo->setHandlebars('Ape Hangers');
	$motorsiklo->setSideCar(1);

	echo $motorsiklo->brand . ': ' . $motorsiklo->shape . '<br />';

	$motorsiklo->showPrice();
	$motorsiklo->showSideCar();
	$motorsiklo->drive();

?>
</html>