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
    // var_dump($arr_url);
    // parse_str($arr_url["query"], $arr_parse);  // 저장된 문자열을 변수와 값의 형태로 변환, 배열도 가능
    // var_dump($arr_parse);  

    
    // 역순의 문자열
    $str_abcd = "abcd";
    echo strrev($str_abcd)."\n";


    // 문자열 자르기
    $str_cut = "가나다라마";
    echo mb_substr($str_cut, 2)."\n"; // '다라마' : 글자 수로 자름
    echo mb_substr($str_cut, 2, 1)."\n"; // '다' : 두번째 글자 이후부터 1번 자름
    echo mb_substr($str_cut, -2)."\n"; // '라' : 음수는 뒤에서부터 자름
    echo mb_substr($str_cut, -2, 1)."\n"; // '라마'
    $str_tng = "안녕하세요. PHP입니다.";
    // PHP입니다.
    echo mb_substr($str_tng, -7)."\n";
    echo mb_substr($str_tng, 7)."\n";
    // 세요. P
    echo mb_substr($str_tng, 3, 5)."\n";
    echo mb_substr($str_tng, -11, 5)."\n";
    

    // 문자열 빈공간 지우기
    $str_trim = "   　abcd     \n";
    echo trim($str_trim);
    echo "aaa"."\n";
    echo rtrim($str_trim)."\n";  // 오른쪽 공백 지우기
    echo ltrim($str_trim)."\n";  // 왼쪽 공백 지우기


    // 문자열의 길이를 구하는 함수
    $str_len = "abcd";
    echo strlen($str_len)."\n";
    $str_len_k = "가나다라";
    echo mb_strlen($str_len_k)."\n"; // 멀티바이트 이용 권장


    // 문자열 포맷에 따라 출력하는 함수
    printf("안녕하세요. %s입니다. %d 추가", "PHP", 1234);
    echo "\n";
    
    define("WELCOME", "안녕하세요 %s님.");
    printf(WELCOME, "홍길동");
    echo "\n";

    // 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다.
    // 에러 번호 : 
        // 1 : 시스템
        // 2 : 로그인
        // 3 : 접속
    
    define("ERROR_MSG", "ERROR(%d) : %s ERROR가 발생했습니다.");
    printf(ERROR_MSG, 1, "시스템");
    echo "\n";
    printf(ERROR_MSG, 2, "로그인");
    echo "\n";
    printf(ERROR_MSG, 3, "접속");
    echo "\n";
    
    // 문자열 분리 함수
    $str_sscanf = "가나다라 50 abcd";
    sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
    printf("%d %s %s", $int_d, $str_ko, $str_en);
    echo "\n";
    echo $str_ko."\n".$int_d."\n".$str_en."\n";


    // 문자열 반복해서 출력해주는 함수
    echo str_repeat("*", 2)."\n";
    echo str_repeat("배고파 ", 3)."\n";


    // 문자열을 특정 문자열로 분리하여 배열로 만드는 함수
    $str_expl = "홍길동,27세,남자,의적,조선";
    $arr_expl = explode(",", $str_expl);
    // print_r($arr_exple);


    // 배열 원소를 결합하여 하나의 문자열로 만드는 함수
    $str_impl = implode("/", $arr_expl);
    echo $str_impl;
?>