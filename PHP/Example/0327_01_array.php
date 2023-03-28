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
    // print_r($arr_week);

    // 중복되지 않는 원소를 반환 : arrary_diff(기준, 비교)
    $arr_diff_1 = array("a", "b", "c");
    $arr_diff_2 = array("a", "b", "d");

    $arr_diff = array_diff($arr_diff_1, $arr_diff_2);
    // print_r($arr_diff);

    // 배열의 정렬 : asort(), arsort(), ksort(), krsort()
    // asort();
    $arr_asort = array("b", "a", "d", "c");
    asort($arr_asort);
    // print_r($arr_asort);

    // arsort();
    $arr_arsort = array("b", "a", "d", "c");
    arsort($arr_arsort);
    // print_r($arr_arsort);

    // ksort();
    $arr_ksort = array("key1" => "val1"
                        ,"key3" => "val3"
                        ,"key4" => "val4"
                        ,"key2" => "val2"
                    );
    ksort($arr_ksort);
    // print_r($arr_ksort);

    // krsort();
    $arr_krsort = array("key1" => "val1"
                        ,"key3" => "val3"
                        ,"key4" => "val4"
                        ,"key2" => "val2"
    );
    krsort($arr_krsort);
    // print_r($arr_krsort);

    // array의 사이즈를 반환하는 함수 count();
    // echo count($arr_krsort);

    //foreach문 
    // foreach( $array as $key => $val){}
    // foreach( $array as $val){}
    $arr1 = array("key1" => "val1"
                ,"key3" => "val3"
                ,"key4" => "val4"
                ,"key2" => "val2"
                );
    
    foreach($arr1 as $key => $val)
    {
        echo $key." : ".$val."\n";
    }

    foreach($arr1 as $val)
    {
        echo $val."\n";
    }


    ?>