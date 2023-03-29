<?php
    // a와 b 더한 후 출력
    $a = 1;
    $b = 2;
    $sum = $a + $b;
    // echo $sum;

    // 함수를 이용하여 작성
    function fnc_add($int_a, $int_b)
    {
        $sum = $int_a + $int_b;
        return $sum;
    }

    // fnc_add 함수 호출
    $result_add = fnc_add(1, 2);
    // echo $result_add;

    // 가변 파라미터 함수
    function fnc_args_add()
    {
        $args = func_get_args();  // 가변 파라미터 습득, array 형태로 넘어옴
        $sum = 0; // 더하기 결과 저장 변수
        
        // 루프 : 더하기 실행
        foreach ($args as $val)  
        {
            $sum += $val;
        }
        return $sum;
    }
    // echo fnc_args_add(1, 2, 3, 4);


    // 재귀함수
    function rcc($param_a)
    {
        if($param_a === 1)
        {
            return 1;
        }
        return $param_a * rcc($param_a - 1);
    }

    echo rcc(3);

    //void 함수
    function sum1($n1, $n2)
    {
        echo $n1 + $n2;
        // return; 이 생략되어 있음
    }
    
    //return 함수
    function sum2($n1, $n2)
    {
        return $n1 + $n2;
    }

    sum1(1, 2);
    sum1(2, 4);

    $result = sum2(3, 6);
    echo $result."\n";
    sum1($result, $result);
?>