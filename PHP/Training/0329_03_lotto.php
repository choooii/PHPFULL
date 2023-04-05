<?php

$arr = array();
for ($i=0; $i < 6; $i++) 
{
    $arr[$i] = rand(1, 45);
    for ($u=0; $u < $i; $u++) 
    { 
        if ($arr[$i] === $arr[$u]) 
        {
            $i--;
            break;
        }
    }
}

var_dump($arr);
?>