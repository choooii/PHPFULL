<?php

// $arr = array();
// for ($i=0; $i < 6; $i++) 
// {
//     $arr[$i] = rand(1, 45);
//     for ($u=0; $u < $i; $u++) 
//     { 
//         if ($arr[$i] === $arr[$u]) 
//         {
//             $i--;
//             break;
//         }
//     }
// }

// var_dump($arr);


$nums = array(0, 0, 0, 0, 0, 0);

	for($n1 = 0; $n1 < 6;) {
		$tmp = 0;
		$rand_num = mt_rand(1, 45);
		for($n2 = 0; $n2 <= $n1; $n2++) {
			if($nums[$n2] === $rand_num) {
				$tmp = 1;
			}
		}
		if($tmp === 0) {
			$nums[$n1] = $rand_num;
            echo $nums[$n1]." ";
			$n1++;
		}
	}
?>