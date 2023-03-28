<?php

// //별개수 증가
// for ($i=1; $i<=5; $i++) {
//     for ($n=1; $n<=$i; $n++) { 
//         echo "*";
//     }
//     echo "\n";
// }

// //별 개수 감소
// for ($i=6; $i>=1; $i--) {
//     for ($n=1; $n<=$i; $n++) { 
//         echo "*";
//     }
//     echo "\n";
// }


// // 트리모양
// $s = 3;
// for ($i=0; $i<$s ; $i++) { 
//     for ($n=$s-1; $n>$i; $n--) { 
//         echo " ";
//         }
//     for ($n=1; $n<=2*$i+1; $n++) { 
//         echo "*";
//         }
//     echo "\n";
//     }

$s = 4;
for ($i=1; $i<=$s ; $i++) { 
    for ($n=$s-1; $n>$i-1; $n--) { 
        echo " ";
        }
    for ($n=1; $n<=$i; $n++) { 
        echo "*";
        }
    echo "\n";
    }

$int = 4;
for ($i = $int; $i > 0; $i--) 
{ 
    for ($z = 1; $z <= $int ; $z++) 
    { 
        if ($z < $i)
        {
            echo " ";
        }
        else
        {
            echo "*";
        }
    }
echo "\n";
}
        ?> 