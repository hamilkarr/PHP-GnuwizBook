<?php
$mysql_host = "hamilkarr.cafe24.com:3306";
$mysql_user = "hamilkarr";
$mysql_password = "aA!12345";
$my_sql_db = "hamilkarr";

try {
  $conn = new PDO($mysql_host,$mysql_user,$mysql_password,$my_sql_db);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "연결 성공";
} catch (PDOException $e) {
  echo "연결 실패: " .$e->getMessage();
}