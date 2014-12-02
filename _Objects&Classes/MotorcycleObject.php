<?php
	include 'VehicleObject.php';

	class Motorcycle extends Vehicle{

		private $num_sidecars;
		private $handlebars;

		//sets the type of handlebar
		public function setHandlebars($handlebarType){
			$this->handlebars = $handlebarType;
		}

		//sets the number of side cars
		public function setSideCar($numSidecars){
			$this->numSideCars = $numSidecars;
		}

		//shows the number of sidecars
		public function showSideCar(){
			echo 'This motorcycle has '. $this->num_sidecars . ' sidecar<br />';
		}
	}
?>