<?php

    // 1. GET Method로 사용자가 입력한 데이터를 HTTP request를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //   2-1. key : id, pw, name, birth_date
    // 3. echo를 이용해서 각각의 데이터 출력

    $get = $_GET;



?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="0412_02_echoGet.php" method="get">
        <label for="id">ID : </label>
        <input type="text" name="id" id="id" value="">
        <br>
        <label for="pw">PW : </label>
        <input type="password" name="pw" id="pw">
        <br>
        <label for="name">이름 : </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="birth_date">생일 : </label>
        <input type="date" name="birth_date" id="birth_date">
        <br>
        <button type="submit">제출</button>
    </form>
</body>
</html>

