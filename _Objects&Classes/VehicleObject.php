<?php
	class Vehicle {
		/*Public Properties*/

		public 	$color;
		public 	$num_doors;
		public 	$price;
		public 	$shape;
		public 	$brand;

		/*Constructor*/

		public function __construct(){
			echo 'About this vehicle: <br />';
		}

		/*Public Methods*/

		// Shows the price of the vehicle
		public function showPrice() {
			echo 'This vehicle costs: ' . $this->price . '.<br />';
		}

		//Shows the number of doors
		public function showNumDoors() {
			echo 'This vehicle has: ' . $this->num_doors . ' doors, <br />';
		}

		// "Drives" the vehicle
		public function drive() {
			echo 'VROOM!';
		}

		// "Stops" the vehicle
		public function stop() {
			echo 'SCREECH <br />';
		}

	}
?>