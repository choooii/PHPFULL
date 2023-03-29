<?php
    
    function my_len($b)
    {
        foreach ($b as $key => $val)
        {
            $a = $key + 1;
        }
        return $a;
    }

    function my_len2($b)
    {
        $a = 0;
        foreach ($b as $val)
        {
            $a++;
        }
        return $a;
    }

    $arr_base = array(1, 2, 1, 2, 3, 3, 4, 5);
    // echo my_len2($arr_base);


    // 별을 int 수만큼 출력하는 함수
    function print_star($int)
    {
        for ($i=0; $i < $int ; $i++) 
        { 
            echo "*";
        }
        echo "\n";
    }
    

    // *
    // **
    // ***
    function print_echo($int)
    {
        for ($i=1; $i <= $int; $i++) 
        { 
            print_star($i);
        }
    }

    // ***
    // ***
    // ***
    function print_star_rect($int)
    {
        for ($i=0; $i < $int; $i++) 
        { 
            print_star($int);
        }
    }

    // echo print_echo(3);
    // echo print_star_rect(3);
    


?>