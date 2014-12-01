<?php
	class Mathematics{
		private $num;

		public function setNum($number){
			$this->num = $num;
		}

		public function addNumber(int $additive){
			return $this->num+$additive;
		}
	}
?>