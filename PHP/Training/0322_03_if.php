<?php
    // 성적
    // 범위 : 
    //     100 A+
    //     99~90 A
    //     89~80 B
    //     79~70 C
    //     69~60 D
    //     60미만 F
    
    // 출력문구는 '당신의 점수는 XX점입니다. <등급>'

    // $n = 100;
    // $A_a = "<A+>";
    // $A = '<A>';
    // $B = "<B>";
    // $C = "<C>";
    // $D = "<D>";
    // $F = "<F>";


    // if ($n == 100)
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$A_a;
    // } 
    // else if ($n >= 90) 
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$A;
    // }
    // else if ($n >= 80) 
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$B;
    // } 
    // else if ($n >= 70) 
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$C;
    // } 
    // else if ($n >= 60) 
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$D;
    // } 
    // else 
    // {
    //     echo "당신의 점수는 ",$n,"점입니다. ",$F;
    // }


        // if ($n == 100)
    // {
    //     $grade = "A+";
    // } 
    // else if ($n >= 90) 
    // {
    //     $grade = "A";
    // }
    // else if ($n >= 80) 
    // {
    //     $grade = "B";
    // } 
    // else if ($n >= 70) 
    // {
    //     $grade = "C";
    // } 
    // else if ($n >= 60) 
    // {
    //     $grade = "D";
    // } 
    // else
    // {
    //     $grade = "F";
    // }

    // echo "당신의 점수는 ".$n."점입니다. <".$grade.">";
    

    // 0~100까지만 입력받았을 때, 당신의 점수는~
    // 그 외의 값일 경우 "잘못된 값을 입력했습니다."라고 출력

    $n = 110;

    if ($n >= 0 && $n <= 100)
    {
        if ($n == 100)
        {
            $grade = "A+";
        } 
        else if ($n >= 90) 
        {
            $grade = "A";
        }
        else if ($n >= 80) 
        {
            $grade = "B";
        } 
        else if ($n >= 70) 
        {
            $grade = "C";
        } 
        else if ($n >= 60) 
        {
            $grade = "D";
        } 
        else
        {
            $grade = "F";
        }
        echo "당신의 점수는 ".$n."점입니다. <".$grade.">";
    }
    else
    {
        echo "잘못된 값을 입력했습니다.";
    }





?>