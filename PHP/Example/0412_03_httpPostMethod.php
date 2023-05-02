<?php
// 1. POST Method
//      - request할 때 데이터를 외부에서 볼 수가 없다
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
    <form action="0412_04_httpPost.php" method="post">
        <input type="text" name="p_test1">
        <br>
        <input type="text" name="p_test2">
        <br>
        <input type="hidden" name="p_hidden1" value="aaa">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>