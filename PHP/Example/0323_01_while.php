<?php
    //1. while문
    // while( 조건 )
    // {
    //    반복하고 싶은 처리;
    //    break; 반복문을 종료합니다.
    // }

    // $d = 2;
    // $i = 1;
    // $max_dan = 9;

    // while($d <= $max_dan)
    //     {
    //     echo "$d 단\n";
    //     $i = 1;
    //     while($i <= $max_dan)
    //         {
    //             echo "$d * $i = ".$d * $i."\n";
    //             ++$i;
    //         }
    //     ++$d;
    //     }

    //2. do while문
    // do {
    //     반복할 처리;
    // }
    // while( 조건 );

    $i = 0;

    // do while은 무조건 한번 처리하고 조건 확인
    do {
        echo $i," do while";
    }
    while($i === 1);

    // while은 조건 확인 후 처리
    while($i === 1)
    {
        echo $i, "while";
    }
?>