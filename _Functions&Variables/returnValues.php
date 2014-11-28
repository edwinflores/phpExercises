<html>
	<body>
		<?php
		//returns one value
		function returnOne() {
			return 1211;
		}

		//returns multiple values using an array
		function returnTwo() {
			return array("Ib", 10);
		}

		//returns by reference
		$names = array("Ib", "Garry", "Mary", "Guertenna");

		function &findOne($n) {
			global $names;
			return $names[$n];
		}

		$person =& findOne(4);
		$person = "Viola";

		//echo -e "reference:	\n";
		//echo -e "Yes or No?";

		//echo "returnOne(): ",  returnOne(), "\n";
		//echo "returnTwo(): ", returnTwo(), "\n";
		//echo "person after change by reference: ", $person, "\n";

		//echo "returnOne(): " . returnOne() . "\n";
		//echo "returnTwO(): " . returnTwo() . "\n";
		//echo "person after change by reference: ". $person . "\n";

		echo "returnOne(): " . returnOne() . "<br/>";
		echo "returnTwo(): " . returnTwo() . "<br/>";
		echo "person after change by reference: " . $person . "<br/>";
		?>
	</body>
</html>
