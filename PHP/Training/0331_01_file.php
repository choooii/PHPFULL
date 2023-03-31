<?php
// 파일명 : gugudan.txt
// 파일위치 : Sample
// 내용은 아래와 같습니다.
// 2단
// 2 * 1 = 2
// 2 * 2 = 4
// ...
// 2 * 9 = 18

function gugu($z)
{
    $str = $z."단";
    for ($i=1; $i < 10; $i++) 
    {
        $str .= "\n$z * ".$i." = ".$i*$z;
    }
    return $str;
}


$f_gugu = fopen("../Example/Sample/gugudan.txt", "a");

fputs($f_gugu, gugu(2));

fclose($f_gugu);


// 배열 이용
// $arr = array();
// for ($i=0; $i <= 9; $i++) 
// {
//     if ($i === 0)
//     {
//         $arr[$i] = "2단";
//     }
//     else 
//     {
//         $arr[$i] = "2 * ".$i." = ".$i*2;
//     }
// }
// $imp = implode("\n", $arr);
// fputs($f_gugu, $imp);

// 함수 안 쓰고
    // $a = 1;
    // $num = 2;
    // fputs($f_gugu, $num."단\n");
    // while ($a <= 9) 
    // {
    //     fputs($f_gugu, $num." * ".$a." = ".$a*$num."\n");
    //     $a ++;
    // }


/* 
김밥
샌드위치
백반
국밥
크림우동
연어초밥
탕수육
돈까스

"국밥"과 "크림우동" 사이에 "스테이크" 추가
*/


$f_food = file("../Example/Sample/food.txt");
$print_food = "";
foreach ($f_food as $val) 
{
    if (trim($val) == "국밥") 
    {
        $print_food .= $val."스테이크\n";
    }
    else 
    {
        $print_food .= $val;
    }
}

print $print_food;

$f_food = fopen("../Example/Sample/food.txt", "w");
// fputs($f_food, $print_food);
// fclose($f_food);

?>