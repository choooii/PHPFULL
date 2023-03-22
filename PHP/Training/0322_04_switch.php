<?php
    $n = 5;

    switch ($n) {
        case $n < 0 || $n > 100:
            echo "잘못된 값을 입력했습니다.";
            break;
        
        default:
            switch ( $n ) {
                case 100:
                    $g = "A+";
                    break;
        
                case 90:
                    $g = "A";
                    break;
        
                case 80:
                    $g = "B";
                    break;
        
                case 70:
                    $g = "C";
                    break;
        
                case 60:
                    $g = "D";
                    break;
        
                default:
                    $g = 'F';
                    break;
            }
            echo "당신의 점수는 $n 점입니다. <$g>";
            break;
    }

?>