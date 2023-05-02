<?php

    // 1. GET Method로 사용자가 입력한 데이터를 HTTP request를 합니다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //   2-1. key : id, pw, name, birth_date
    // 3. 유저가 입력하지 않은 데이터도 함께 전송
    //   3-1. key : h_page, val : h1
    // 4. echo를 이용해서 각각의 데이터 출력

    $post_method = $_POST;
    foreach ($post_method as $key => $val) 
    {
        echo $key." : ".$val;
        echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post 방식</title>
</head>
<body>
    <form action="0412_02_httpPostMethod.php" method="post">
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
        <input type="hidden" name="h_page" value="h1">
        <button type="submit">제출</button>
    </form>
</body>
</html>