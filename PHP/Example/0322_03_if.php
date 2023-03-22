<?php
    //1. if 기본형태

    // if( 1 > 2 ){
    //     echo '참';
    // }
    // else {
    //     echo '거짓';
    // }

    // if( 1 < 2 ){
    //     echo '참';
    // }
    // else {
    //     echo '거짓';
    // }

    $num = 2;

    if ( $num = 0 )
    {
        echo "0입니다.";
    }
    elseif ( $num == 1 )
    {
        echo "1입니다.";
    }
    elseif ( $num == 2 )
    {
        echo "2입니다.";
    }
    elseif ( $num == 3 )
    {
        echo "3입니다.";
    }
    else
    {
        echo "모르겠다.";
    }



$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} 
elseif ($t < "20") {
    echo "Have a good day!";
} 
else {
    echo "Have a good night!";
}
?>