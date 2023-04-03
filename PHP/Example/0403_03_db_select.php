<?php
include_once("./0403_02_fncDB.php");

$obj_conn = null;

my_db_conn( $obj_conn );

$sql = 
    " SELECT "
    ."  * "
    ." FROM "
    ."  employees "
    ." LIMIT :limit_start";

$arr_prepare =
    array(
        ":limit_start" => 5
    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$result = $stmt->fetchAll();

var_dump($result);

$obj_conn = null;
?>