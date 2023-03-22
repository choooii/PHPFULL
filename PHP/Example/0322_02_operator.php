<?php
    //1. 산술연산자

    echo 1 + 1;
    echo "\n", 1 - 1;
    echo "\n", 2 * 3;
    echo "\n", 10 / 2;
    echo "\n", 10 % 3;
    echo "\n연산순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    echo "\n\n";


    //2. 증가/감소 연산자
    $num1 = 1;
    $num2 = 1;

    //전위증가 연산자
    echo ++$num1, "\n";
    echo ++$num1, "\n\n";

    //후위증가 연산자
    echo "후위 ", $num1++,"\n";
    echo "후위 ", $num1++ * 10, "\n\n";


    //3. 산술 대입 연산자
    echo $num1 = 1, "\n";
    echo $num1 = $num1 + 1, "\n"; 
    echo $num2 = 1, "\n";
    echo $num2 += 1, "\n\n";


    //4. 비교 연산자
    var_dump(1 > 2);
    var_dump(1 < 2);
    var_dump(1 >= 2);
    var_dump(1 <= 2);
    
    var_dump(1 == '1');
    var_dump(1 === '1');
    var_dump(1 != '1');
    var_dump(1 !== '1');

    
    //5. 논리 연산자
    var_dump(1 == 1 && 2 == 2);
    var_dump(1 == 2 || 2 == 1);
    var_dump(!(1 == 1));
?>