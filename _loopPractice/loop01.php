<?php
	for($x=1;$x<=30;$x++){
		for($y=1;$y<=$x;$y++){
			echo "*";
				if($y<$x){
					echo " ";
				}
		}
		echo "</br>";
	}
?>