<?php
    // min, max, floor, ceil, round, rand
    echo floor(4.15)."\n";  // 소수점 아래 버림
    echo round(4.5),"\n";  // 반올림
    echo ceil(4.5),"\n";  // 소수점 아래 올림
    echo min(array(3, 4, 6, 1, 3))."\n";  // 최소값
    echo max(array(3, 4, 6, 1, 3))."\n";  // 최대값
    echo rand(0, 2)."\n";  // 랜덤

    //날짜 관련 함수
    echo time()."\n";  // 과거 특정 날짜 이후 지금까지 초
    echo date('Y-m-d H:i:s')."\n";
    echo date('y-M-D a h:i:s')."\n";
    echo date('ymd H:i')."\n";

    //난수 함수(랜덤)
    echo mt_rand(0, 3)."\n";


    // OS, PHP, GLOBALS 정보 상수, 변수, 함수
    // echo PHP_OS;
    // echo PHP_VERSION;
    // var_dump($GLOBALS);
    // var_dump(phpinfo());

    // 상수 정의 함수
    // 상수 선언(명명규칙: 상수명은 꼭 대문자로 작성)
    define("INT_ONE", 1);
    echo INT_ONE."\n"; 
?>