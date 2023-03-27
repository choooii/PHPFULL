<?php
    $week = array("Sun", "Mon", "Tue", "Wed");
    // echo $week[0];

    $week2 = array($week[1], $week[3], $week[0], $week[2]);
    // print_r($week2);

    // 멀티타입 배열
    $arr_mult_type = array("aaa", 1, 3.14, "a");
    // var_dump($arr_mult_type);

    // 연상 배열
    $arr_ass = array("key1" => "val1"
                    ,"key2" => "val2");
    // echo $arr_ass["key1"];

    // 다차원 배열

    // 2차원
    $arr_temp = array(
                        array(1, 2, 3, 4)
                        ,array(5, 6, 7, 8)
                    );  
    // echo $arr_temp[1][3];

    // 3차원
    $arr_temp = array(
                    array(1, 2, 3, 4)
                    ,array(5, 6, 7, 8)
                    ,array(
                        array(9, 10, 11)
                    )
                );  
    // echo $arr_temp[2][0][1];

    // $arr_temp_3 = $arr_temp[2][0];
    // var_dump($arr_temp_3[1]);

    $arr_temp_3 = $arr_temp[2];

    $arr_temp_3_c = array(
                        array(9, 10, 11)
                    );

    // 배열의 원소 삭제 : unset()
    $arr_week = array("Sun", "Mon", "delete", "Tue", "Wed");
    unset($arr_week[2]);
    print_r($arr_week);

    ?>