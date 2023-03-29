<?php
    $arr = array(5, 10, 7, 3, 1);

    function back($arr)
    {
        for ($i=count($arr) - 1; $i > 0; $i--) 
        { 
            for ($z=0; $z < $i; $z++) 
            {   
                if ($arr[$z]>$arr[$z+1]) 
                {
                    $temp = $arr[$z];
                    $arr[$z] = $arr[$z+1];
                    $arr[$z+1] = $temp;
                }
            }
        }
        return $arr;
    }

    function back2($arr)
    {
        $a = count($arr)-1;
        while ($a > 0) {
            $i = 0;
            while ($i < $a) {
                if ($arr[$i]>$arr[$i+1]) 
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1] = $temp;
                }
                $i++;
            }
            $a --;
        }
        return $arr;
    }

    // function select($arr)
    // {
    //     for ($i=0; $i < count($arr); $i++) 
    //     { 
    //         for ($z=0; $z < $i; $z++) 
    //         {   
    //             if ($arr[$i] < $arr[$z]) 
    //             {
    //                 $temp = $arr[$i];
    //                 $arr[$i] = $arr[$z];
    //                 $arr[$z] = $temp;
    //             }
    //         }
    //     }
    //     return $arr;
    // }


    $result = back2($arr);
    print_r($result);

?>