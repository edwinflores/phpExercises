<?php
//Simply prints the elements of an array
	//type is:
	# 0 for one element each line
	# 1 for one element separated by comma
	# default is still under construction
function PrintArray($toPrint, $type){
	print("#------------------------------# \n");
	switch ($type) {
		case '0':
			foreach ($toPrint as $member) {
				echo $member . "\n";
			}
			break;

		case '1':
			foreach ($toPrint as $member) {
				echo $member . ", ";
			}
			echo "\n";
			break;

		default:
			break;
	}
	
	print("#------------------------------# \n");
}

//Displays all currently declared classes and methods and properties for each
function displayClasses(){
	$classes = get_declared_classes();

	foreach ($classes as $class) {
		echo "Showing information about ($class)\n";
		echo "Class methods: \n";

		$methods = get_class_methods($class);

		if (!count($methods)) {
			echo "<i>None</i><br />";
		} else {
			foreach ($methods as $method) {
				echo "<b>{$method}</b>()<br />";
			}
		}

		echo "Class properties:<br />";
		$properties = get_class_vars($class);

		if (!count($properties)) {
			echo "<i>None</i><br />";
		} else {
			foreach ($methods as $method) {
				echo "<b>\${property}</b><br />";
			}
		}

		echo "<hr />";
	}
}

// Returns ab array of callable methods, including inherited methods

function getCallableMethods($object){
	$methods = get_class_methods(get_class($object));

	if(get_parent_class($object)) {
		$parent_methods = get_class_methods(get_parent_class($object));
		$methods = array_diff($methods, $parent_methods)
	}

	return $methods;
}

// Return an array of inherited methods
function getInheritedMethods($object){
	$methods = get_class_methods(get_class($object));

	if (get_parent_class($object)) {
		$parentMethods = get_class_methods(get_parent_class($object));
		$methods = array_intersect($methods, $parentMethods);
	}

	return $methods;
}

// Return an array of superclasses
function getLineage($object){
	if (get_parent_class($object)) {
		$parent = get_parent_class($object);
		$parentObject = new $parent;

		$lineage = getLineage($parentObject);
		$lineage[] = get_class($object);
	} else {
		$lineage = array(get_class($object));
	}

	return $lineage;
}

// Return an array of subclasses
function getChildClasses($object){
	$classes 	= get_declared_classes();
	$children 	= array();
	
	foreach ($classes as $class) {
		if (substr($class, 0, 2) == '__') {
			continue;
		}

		$child = new $class;

		if (get_parent_class($child) == get_class($object)) {
			$children[] = $class;
		}
	}

	return $children;
}

// Displays object information
function printObjectInfo($object){
	$class = get_class($object);

	echo "<h2>Class</h2>";
	echo "<p>{$class}</p>";

	// Fetches superclasses
	echo "<h2>Inheritance</h2>";

	echo "<h3>Parents</h3>";
	$lineage = getLineage($object);
	array_pop($lineage);

	if (count($lineage) > 0) {
		echo "<p>" . join(" -&gt;", $lineage) . "</p>";
	} else {
		echo "<i>None</i>";
	}

	// Fetches children
	echo "<h3>Children</h3>";
	$children = getChildClasses($object);
	echo "<p>";

	if (count($children) > 0) {
		echo join(', ', $children);
	} else {
		echo "<i>None</i>";
	}

	echo "</p";

	// Fetches methods
	echo "<h2>Methods</h2>";
	$methods 		= getCallableMethods($class);
	$object_methods	= get_methods($object);

	if (!count($methods)) {
		echo "<i>None</i><br />";
	} else {
		echo '<p>Inherited methods are in <i>italics</i>.</p>';

		foreach ($methods as $method) {
			if (in_array($method, $object_methods)) {
				echo "<b>{$method}</b>();<br />";
			} else {
				echo "<i>{$method}</i>();<br />";
			}
		}
	}

	echo "<h2>Properties</h2>";
	$properties = get_class_vars($class);

	if (!count($properties)) {
		echo "<i>None</i><br />";
	}

	else {
		foreach (array_keys($properties) as $property) {
			echo "<b>\${$property}</b> = " . $object->$property . "<br />";
		}
	}

	echo "<hr />";
}

/*Variable Length Version (Only usable in PHP 5.6+)*/
/*Well I wasted time trying to be convenient for myself*/
	/*function PrintArray(...array $toPrint){

		foreach ($toPrint as $arrayPrint) {
			foreach ($arrayPrint as $member) {
				echo $member . "\n";
			}
		}
	}*/
?>