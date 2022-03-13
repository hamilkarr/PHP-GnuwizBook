<?php
header('content-type:text/html; charset=euc-kr');

$mysql_host = "hamilkarr.cafe24.com";
$mysql_user = "hamilkarr";
$mysql_passworld = "aA!13579";
$mysql_db = "hamilkarr";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_passworld,$mysql_db);

if (!$conn) {
  die("연결 실패: ".mysqli_connect_error());  
}

//ini_set("display_errors",'Off');
session_start();
?>