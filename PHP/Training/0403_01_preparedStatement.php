<?php
// 아래 쿼리로 결과를 출력하는 프로그램을 만들어주세요.
// SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary >= ? ORDER BY salary DESC LIMIT ?
// to_date : 9999-01-01
// salary : 50000
// limit : 5

function salary($i1, $i2, $i3)
{
    $result = null;
    $dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );    
        $stmt = $dbc->stmt_init();
        $stmt->prepare( "
                        SELECT emp_no, salary 
                            FROM salaries 
                            WHERE to_date = ? 
                            AND salary >= ? 
                            ORDER BY salary DESC 
                            LIMIT ?
                        " );
        $stmt->bind_param( "iii", $i1, $i2, $i3 );
        $stmt->execute(); 

        $result = $stmt->get_result();
        $stmt->close();
    $dbc->close();

    while ( $row = $result->fetch_assoc() ) 
    {
        echo $row["emp_no"]." ".$row["salary"]."\n";
    }
}
salary(99990101, 50000, 5);


$result = null;

$dbc = mysqli_connect( "localhost", "root", "root506", "employees", 3306 );    
$stmt = $dbc->stmt_init();
$stmt->prepare( " 
                SELECT emp_no, salary 
                    FROM salaries 
                    WHERE to_date = ? 
                    AND salary >= ? 
                    ORDER BY salary DESC 
                    LIMIT ? 
                " );
$stmt->bind_param( "sii", $i1, $i2, $i3 );

$i1 = "9999-01-01";
$i2 = 50000;
$i3 = 5;
$stmt->execute(); 

$result = $stmt->get_result();
$stmt->close();
$dbc->close();
while ( $row = $result->fetch_assoc() ) 
{
    echo $row["emp_no"]." ".$row["salary"]."\n";
}



?>