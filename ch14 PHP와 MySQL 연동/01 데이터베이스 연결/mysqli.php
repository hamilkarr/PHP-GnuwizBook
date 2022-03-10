<?php
$mysql_host = "hamilkarr.cafe24.com:3306";
$mysql_user = "hamilkarr";
$mysql_password = "aA!12345";
$my_sql_db = "hamilkarr";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$my_sql_db);
if (!$conn) {
  die("연결 실패: " .mysqli_connect_error());
}
echo "연결 성공";