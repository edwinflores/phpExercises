<?php
	class Mathematics{
		private $num;

		public function setNum($number){
			$this->num = $num;
		}

		public function addNumber(int $additive){
			return $this->num+$additive;
		}

		public function subractNumber(int $subtrahend){
			return $this->num-$subtrahend;
		}

		public function multiplyNumber(int $multiplier){
			return $this->num*$multiplier;
		}

		public function divideNumber(int $dividend){
			return $this->num/$dividend;
		}
	}
?>