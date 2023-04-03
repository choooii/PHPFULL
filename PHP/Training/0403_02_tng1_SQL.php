<?php
// 우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.
include_once("../Example/0403_02_fncDB.php");

// 1. 전체 월급의 평균

$obj_conn = null; 
my_db_conn( $obj_conn ); 

$sql = 
    " SELECT "
    ."  AVG(salary) "
    ." FROM "
    ."  salaries "
    ." WHERE "
    ." to_date = DATE(99990101) ";

$stmt = $obj_conn->prepare( $sql );
$stmt->execute();
$result = $stmt->fetchAll();

// var_dump($result);
echo $result[0]["AVG(salary)"];

$obj_conn = null; 

// 2. 새로운 사원 정보를 employees 테이블에 등록
// $obj_conn = null; 
// my_db_conn( $obj_conn );

// $sql = 
//     "INSERT INTO employees (
//         emp_no
//         ,birth_date
//         ,first_name
//         ,last_name
//         ,gender
//         ,hire_date
//     )
//     VALUES 
//     (
//         :emp_no
//         ,:birth_date
//         ,:first_name
//         ,:last_name
//         ,:gender
//         ,:hire_date
//     )";

// $arr_prepare = 
//     array(
//     ":emp_no" => 500001
//     ,":birth_date" => "1996-10-25"
//     ,":first_name" => "Aran"
//     ,":last_name" => "Choe"
//     ,":gender" => "F"
//     ,":hire_date" => "2023-02-28"
//     );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute($arr_prepare);
// $obj_conn->commit();
// $obj_conn = null;

// 3. 2에서 등록한 사원의 이름을 "길동", 성을 "홍"으로 변경
// $obj_conn = null; // PDO Class
// my_db_conn( $obj_conn ); // DB 연결

// $sql = 
//     "
//     UPDATE employees
//     SET first_name = :first_name
//         ,last_name = :last_name
//     WHERE emp_no = :emp_no
//     ";

// $arr_prepare = 
//     array(
//         ":first_name" => "길동"
//         ,":last_name" => "홍"
//         ,":emp_no" => 500001
//     );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute($arr_prepare);
// $obj_conn->commit();
// $obj_conn = null;

// 4. 2에서 등록한 사원을 삭제
// $obj_conn = null;
// my_db_conn( $obj_conn );

// $sql = 
//     "
//     DELETE FROM employees
//     WHERE emp_no = :emp_no
//     ";

// $arr_prepare = 
//     array(
//         ":emp_no" => 500001
//     );

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $obj_conn->commit();
// $obj_conn = null;

?>