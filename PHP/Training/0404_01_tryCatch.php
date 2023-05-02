<?php
/* 
아래 쿼리를 이용해서 DB접속 > data획득 후 출력
try-catch로 에러 처리
에러가 날 경우 해당 exception의 에러메시지 출력
정상 종료일 경우 "정상 종료"
    $sql1 = " SELECT * FROM department ";
    $sql2 = " SELECT * FROM dept_manager ";
*/

include_once("../Example/0403_02_fncDB.php");

try 
{
    $sql1 = " SELECT * FROM departments LIMIT 2 ";
    $sql2 = " SELECT * FROM dept_manager LIMIT 5 ";
    
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $stmt = $obj_conn->query( $sql1 );
    $result = $stmt->fetchAll();

    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchAll();
    
    foreach ($result as $val) 
    {
        echo implode(" ", $val)."\n";
    }
    
    foreach ($result2 as $val) 
    {
        echo implode(" ", $val)."\n";
    }
    echo "정상종료";
    
} 
catch ( Exception $e ) 
{
    echo "----에러 발생----\n";
    echo $e->getMessage();
    echo "\n----에러 발생----\n";
}
finally
{
    $obj_conn = null;
}

// try 
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn );
//     $sql2 = " SELECT * FROM dept_manager LIMIT 1 ";
//     $stmt = $obj_conn->query( $sql2 );
//     $result = $stmt->fetchAll();
//     var_dump($result);
//     echo "정상종료\n";
    
// } 
// catch ( Exception $e ) 
// {
//     echo "----에러 발생----\n";
//     echo $e->getMessage();
//     echo "\n----에러 발생----\n";
// }
// finally
// {
//     $obj_conn = null;
// }


?>