<?php
include_once("./0403_02_fncDB.php");

// try-catch문: 에러처리를 하가위한 문법
// try 
// {
//     // 우리가 실행하고 싶은 소스코드를 작성
// } 
// catch ( Exception $e ) 
// {
//     // 에러가 발생했을 때 실행되는 소스코드를 작성
// }
// finally
// {
//     // 정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
// }

try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELECT * FROM employees WHERE emp_no = 1000000 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchAll();

    if ( count( $result ) === 0 ) 
    {
        // throw Exception : 에러를 강제로 일으키는 구문
        throw new Exception("E99");
    }

    var_dump($result);
    echo "try\n";
} 
catch ( Exception $e ) 
{
    echo "----에러 발생----\n";
    if ( $e->getMessage() === "E99") 
    {
        echo "데이터 0건";
    }
    else
    {
        echo $e->getMessage();
    }
    echo "\n----에러 발생----\n";
}
finally
{
    echo "finally\n";
    $obj_conn = null;
}

echo "종료";

?>