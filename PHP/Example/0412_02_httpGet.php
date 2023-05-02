<?php
    // GET Method로 넘어온 데이터를 담고있는 변수
    var_dump($_GET);

    
    // ** 주의 사항 **
    // $_GET은 원본 데이터이므로 값이 수정되지 않게 조심해야 함

    // 때문에 현업에서는 아래처럼 다른 변수에 담아 사용
    // $post_get = $_GET;
    // $post_get["test1"];
    ?>