<?php
	$arr = [1, 2, -3, 4, 5];
	$sum = 0;
	foreach ($arr as $elem) {
		if ($elem > 0) {
			$sum += $elem;
			echo $elem;
			break; 
		}
	}
?>