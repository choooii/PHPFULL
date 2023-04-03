<?php

$db_host        = "localhost";  // 원래는 ip주소가 들어감
$db_user        = "root";
$db_password    = "root506";
$db_name        = "employees";
$db_charset     = "utf8mb4";
$db_dns         = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option      = array(
                        PDO::ATTR_EMULATE_PREPARES     => false // DB의 Prepared Statement 기능을 사용하도록 설정
                        ,PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
                        ,PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
                        );

// PDO Class로 DB연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option );


// SELECT 예제
// 사번 10001, 10002의 현재 연봉과 사번, 생일 쿼리 변수
// $sql = 
//     " SELECT "
//     ."  sal.salary "
//     ."  ,sal.emp_no "
//     ."  ,emp.birth_date "
//     ." FROM "
//     ."  salaries sal "
//     ."  INNER JOIN employees emp "
//     ."      ON sal.emp_no = emp.emp_no "
// 	." WHERE "
//     ." ( "
//     ."      sal.emp_no = :emp_no1 "
//     ."      OR sal.emp_no = :emp_no2 "
//     ." ) "
//     ."  AND sal.to_date >= now() ";

// $arr_prepare = 
//     array(":emp_no1" => 10001
//             ,":emp_no2" => 10002
//         );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $result = $stmt->fetchAll();
// foreach ($result as $val)   // 배열이 $val에 담김
// {
//     echo $val["salary"],"\n";
// }


// INSERT 예제
$sql =
    " INSERT INTO "
    ." departments( "
    ."  dept_no "
    ."  ,dept_name "
    ." ) "
    ." VALUES( "
    ."  :dept_no "
    ."  ,:dept_name "
    ." ) "
    ;

$arr_prepare = array(
                    ":dept_no" => "d010"
                    ,":dept_name" => "PHP풀스택"
                    );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );
$obj_conn->commit();

$obj_conn = null;

?>