<?php

// DB 연결
$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
// 변수선언 = mysql_connect("호스트", "사용자명", "비밀번호", "db명", 포트번호);
// var_dump($dbc);

// 쿼리 요청
// $result_query = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;");
// var_dump($result_query);

$i1 = "F";
$i2 = 10010;
$i3 = 5;
$result = null;
// Prepared Statement : 
$stmt = $dbc->stmt_init(); // statement 셋팅
$stmt->prepare("SELECT emp_no, first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ?"); //DB에 질의할 쿼리 작성
$stmt->bind_param("sii", $i1, $i2, $i3); // prepared 셋팅
$stmt->execute(); // DB에 쿼리 질의 실행


// ---------------- 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법 --------------
// $stmt->bind_result($col1, $col2); // 질의 결과를 각 아규먼트에 저장하기 위한 셋팅
// $stmt->fetch(); // bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행될 때 마다 한 레코드씩 저장)

// 패치를 루프로 돌려서 모든 질의결과를 가져오는 방법
// while ($stmt->fetch()) 
// {
//         echo "$col1 $col2\n";
//     }


// --------------- 이하 연상 배열로 가져오는 방법 --------------
$result = $stmt->get_result(); // 질의 결과를 저장
while ($row = $result->fetch_assoc()) 
{
    echo $row["first_name"]." ".$row["emp_no"]."\n";
}

// DB 연결 종료
mysqli_close($dbc);


// while ($temp_row = mysqli_fetch_row($result_query)) // 일반 배열 값으로 가져옴
// {
//     var_dump($temp_row[1]);
// }

// while ($temp_row = mysqli_fetch_assoc($result_query)) // 연상배열 키 값으로 가져옴
// {
//     echo $temp_row["first_name"];
//     echo $temp_row["emp_no"]."\n";
// }




?>