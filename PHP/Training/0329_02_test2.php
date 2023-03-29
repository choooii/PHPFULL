<?php
    //배열 안에 최대 값, 최소 값을 출력해주는 함수를 각각 구현해주세요.
    //함수명은 "my_max", "my_min"

$arr = array(5, 10, 7, 3, 1);

function my_max($arr)
{
    $temp = $arr[0];
    foreach ($arr as $val) 
    {
        if ($temp < $val)
        {
            $temp = $val;
        }
    }
    return $temp;
}

function my_min($arr)
{
    $temp = $arr[0];
    for ($i=1; $i < count($arr) ; $i++) 
    { 
        if ($temp > $arr[$i]) 
        {
            $temp = $arr[$i];
        }
    }
    return $temp;
}

// echo my_max($arr);
echo my_min($arr);

?>