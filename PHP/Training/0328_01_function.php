<?php
// 두 매개변수의 차를 구하는 함수를 구현
function fnc_sub($int_1, $int_2)
{
    $sub = $int_1 - $int_2;
    return $sub;
}


// 두 매개변수를 나눈 함수를 구현
function fnc_div($int_1, $int_2)
{
    $div = $int_1 / $int_2;
    return $div;
}


// 두 매개변수를 곱하는 함수를 구현
function fnc_mul($int_1, $int_2)
{
    return $int_1 * $int_2; // return에 바로 수식을 사용하는 것도 가능
}


// 각각의 결과 출력
echo fnc_sub(3,2)."\n";

$result_div = fnc_sub(4, 2);
echo $result_div."\n";

$result_mul = fnc_mul(4, 2);
echo $result_mul."\n";



// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현
function fnc_args_sub()
{
    $args = func_get_args(); 
    $sub = $args[0]*2; //2x - x = x 
    
    foreach ($args as $val)  
    {   
        $sub = $sub - $val;
    }
    return $sub;
}
echo "빼기: ".fnc_args_sub(7, 2, 1)."\n";

function fnc_args_div()
{
    $args = func_get_args(); 
    $div = $args[0]*$args[0]; 
    
    foreach ($args as $val)  
    {
        $div /= $val;
    }
    return $div;
}
echo "나누기: ".fnc_args_div(10, 2, 5)."\n";


function fnc_args_multi()
{
    $args = func_get_args(); 
    $multi = 1; 
    
    foreach ($args as $val)  
    {
        $multi *= $val;
    }
    return $multi;
}
echo "곱하기: ".fnc_args_multi(2, 2, 2)."\n";


// if 사용해서 구현
function fnc_args_sub2()
{
    $args = func_get_args();

    foreach ($args as $key => $val) 
    {
        if ($key === 0)
        {
            $sub = $val;
        }
        else
        {
            $sub = $sub - $val;
        }
    }
    return $sub;
}
echo "빼기: ".fnc_args_sub2(10, 2, 1)."\n";

// 선생님 방법: 초기값을 null로 세팅
function fnc_args_minus()
{
    $args = func_get_args();
    $sub = null;

    foreach ($args as $val) 
    {
        if(is_null($sub))
        {
            $sub = $val;
        }
        else 
        {
            $sub -= $val;
        }
    }
    return $sub;
}
echo "빼기: ".fnc_args_minus(10, 2, 1)."\n";
?>