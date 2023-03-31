<?php
    // 파일을 여는 방법 : fopen( 파일위치, 파일여는방식 )
        // $f_food = fopen("./Sample/food.txt", "r");  // r : 읽기 전용(포인터가 파일 시작에서)
        // $f_food = fopen("./Sample/food.txt", "w");  // w : 쓰기 전용, 파일이 존재하면 내용 삭제
        // $f_food = fopen("./Sample/food.txt", "a");  // a : 쓰기 전용(포인터가 파일 끝에서)
    
    // 파일을 한줄씩 읽어오는 방법 : fgets( open한 파일 )
        // while (!feof($f_food)) 
        // {
            //     echo fgets($f_food);
            // }

    // 파일에 내용 추가 : fputs( open한 파일, 추가할 내용)
        fputs($f_food, "\n돈까스1");
        fputs($f_food, "\n돈까스2");
        fputs($f_food, "\n돈까스3");

    // 파일을 닫는 방법 : fclose( open한 파일 )
        fclose($f_food);


?>