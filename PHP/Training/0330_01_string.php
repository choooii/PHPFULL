<?php
    // "I am always Hello."에서 "Hello"를 "Happy"로 바꾸어 출력하는 프로그램 작성

    $str = "I am always Hello.";
    $str_expl1 = explode("Hello", $str);
    $str_impl = implode("Happy", $str_expl1);
    // echo $str_impl;


    // $arr_expl = explode(" ", $str);
    // $jeom = substr($arr_expl[3], -1);
    // echo $arr_expl[0]." ".$arr_expl[1]." ".$arr_expl[2]." "."Happy".$jeom;

    $front = substr($str, 0, 12);
    $back = substr($str, -1);
    // echo $front."Happy".$back;

    // echo substr_replace($str,"Happy", 12, 5);

    // 함수명 : my_str_replace
    // 리턴값 : String 형태, $result_str
    function my_str_replace($result)
    {
        $str = "I am always Hello.";
        $front = substr($str, 0, 12);
        $back = substr($str, -1);
        $result_str = $front.$result.$back;
        return $result_str;
    }

    function my_str_replace2($param_str, $param_separator, $param_ch)
    {
        $arr_expl = explode($param_separator, $param_str);
        $result_str = implode($param_ch, $arr_expl);
        return $result_str;
    }

    echo my_str_replace2($str, "am", "Happy");

    echo "\n";

    // PHP 함수
    echo str_replace("Hello", "Happy", $str);

