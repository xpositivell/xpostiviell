<?php
	$arr =  [
        [
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
        ],
        [
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
        ],
        [
            [1, 2, 3, 4, 5],
            [1, 2, 3, 4, 5],
        ],
    ];

	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
				for($h = 0; $h < 3; $h++) {
                    $arr[$i][$j][$h] = $h + 1;  
                }
		}
	}

	var_dump($arr);

?>