<?php
	echo "<table border =\"1\" style='border-collapse: collapse'>";

	for($row=1; $row <= 20; $row++){
		echo "<tr> \n";

		for ($col=1; $col <= 20; $col++){
			$p = $col * $row;
			echo "<td>$p</td> \n";
		}
		echo "</tr>";
	}
		echo "</table>";
?>