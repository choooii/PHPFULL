<?php
    //3. for문
    for ($d=2; $d<=9 ; $d++) 
    {
        echo $d," 단\n";
        for ($i=1; $i <=9 ; $i++) 
        { 
            echo "$d * $i = ".$d * $i."\n";
        }
    }

    $f =1;
    
    for ($i=1; $i <= 10 ; $i++) { 
        $f = $f * $i;
        echo $f." ".$i."\n";
    }
    
?>