<?php
$mysql_host = "hamilkarr.cafe24.com:3306";
$mysql_user = "hamilkarr";
$mysql_password = "aA!12345";
$my_sql_db = "hamilkarr";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_password,$my_sql_db);

if ($conn->connect_error) {
  die("���� ����: " .$conn->connect_error);  
}
echo "���� ����";��,