<?php
	$all_lines = file('http://en.wikipedia.org/wiki/Potato');
	foreach($all_lines as $line_num => $line){
		echo "Line No. -{$line_num}: " . htmlspecialchars($line) . "<br />\n";
	}
?>