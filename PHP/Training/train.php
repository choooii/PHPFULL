<?php 
include_once("../Example/0403_02_fncDB.php");

// 1. 전체 월급의 평균

$obj_conn = null; // PDO Class

my_db_conn( $obj_conn ); // DB 연결

$sql = 
    " SELECT "
    ."  AVG(salary) "
    ." FROM "
    ."  salaries "
    ." WHERE "
    ." to_date = :to_date ";

$arr_prepare = 
    array(
        ":to_date" => "9999-01-01"
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute($arr_prepare);
$result = $stmt->fetchAll();

// var_dump($result);
echo $result[0]["AVG(salary)"];

$obj_conn = null;

?>