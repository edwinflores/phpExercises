<?php
	class Counter{
		private static $count = 0;

		function __construct(){
			self::$count++;
		}

		//Get the current count
		public static function getCount(){
			return self::$count;
		}
	}
?>