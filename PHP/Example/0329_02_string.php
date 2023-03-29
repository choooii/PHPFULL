<?php
    // 문자열 합치기
    $str_1 = "aaa";
    $str_2 = "bbb";
    $str_sum = $str_1.$str_2;
    echo $str_sum."\n";

    // 대소문자 변환
    $str_en = "abcd efgh";

        // 소문자 변환
        echo strtolower($str_en)."\n";

        // 대문자 변환
        echo strtoupper($str_en)."\n";

        // 맨 앞글자만 대문자 변환
        echo ucfirst($str_en)."\n";

        // 각 단어의 맨 앞글자만 대문자 변환
        echo ucwords($str_en)."\n";

    // URL 관련 함수
    $url = "https://www.google.com/search?q=%EC%8A%A4%EC%99%80%EC%B9%98+%EC%9D%B8%ED%84%B0%EB%84%B7+%ED%83%80%EC%9E%84&oq=%EC%8A%A4%EC%99%80%EC%B9%98+%EC%9D%B8%ED%84%B0%EB%84%B7+%ED%83%80%EC%9E%84&aqs=chrome..69i57.2512j0j7&sourceid=chrome&ie=UTF-8";

    $arr_url = parse_url($url);  // url을 배열로 분할
    var_dump($arr_url);

    parse_url($arr_url["host"], $arr_parse);

    // var_dump($arr_parse);


?>