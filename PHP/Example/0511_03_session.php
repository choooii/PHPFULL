<?php
$user_id = "php506";
$user_pw = "506";

// session명 지정, 지정하지 않으면 'PHPSESSID'로 지정됨
session_name("kim");

// session 시작
session_start();

// --------------------
// 유저 인증작업 필요
// --------------------

// session에 데이터 저장
$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delete";




?>