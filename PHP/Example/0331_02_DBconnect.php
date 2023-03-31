<?php

// DB 연결
$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);
// 변수선언 = mysql_connect("호스트", "사용자명", "비밀번호", "db명", 포트번호);
// var_dump($dbc);

// 쿼리 요청
$result_query = mysqli_query($dbc, "SELECT emp_no, first_name FROM employees LIMIT 5;");
// var_dump($result_query);


// DB 연결 종료
mysqli_close($dbc);

// while ($temp_row = mysqli_fetch_row($result_query)) // 일반 배열 값으로 가져옴
// {
//     var_dump($temp_row[1]);
// }

while ($temp_row = mysqli_fetch_assoc($result_query)) // 연상배열 키 값으로 가져옴
{
    echo $temp_row["first_name"];
    echo $temp_row["emp_no"]."\n";
}




?>