<?php
// 사번이 10005 이하 사원의 사번, 이름(성, 이름), 성별, 생일

$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);

$sql = 
        "
        SELECT emp_no, CONCAT(last_name, ' ', first_name) AS full_name, gender, birth_date 
            FROM employees 
            WHERE emp_no <= 10005;
        ";

$result_query = mysqli_query($dbc, $sql);

mysqli_close($dbc);

// 레코드 수 세는 함수 사용
    // if (mysqli_num_rows($result_query) !== 0)
    // {
    //     while ($temp_row = mysqli_fetch_assoc($result_query))
    //     {
    //         // echo $temp_row["emp_no"]." ";
    //         // echo $temp_row["full_name"]." ";
    //         // echo $temp_row["gender"]." ";
    //         // echo $temp_row["birth_date"]."\n";

    //         echo implode(" ", $temp_row)."\n";
    //     }
    // }
    // else 
    // {
    //     echo "데이터 없음";
    // }


// 플레그 이용
$flg_cnt = false;
while ($temp_row = mysqli_fetch_assoc($result_query)) 
{
    echo implode(" ", $temp_row)."\n";
    $flg_cnt = true;
}
if(!$flg_cnt)
{
    echo "데이터가 0건 입니다.";
}




?>