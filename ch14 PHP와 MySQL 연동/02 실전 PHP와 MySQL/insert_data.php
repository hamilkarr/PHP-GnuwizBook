<?php
$mysql_host = "hamilkarr.cafe24.com";
$mysql_user = "hamilkarr";
$mysql_password = "aA!13579";
$mysql_db = "hamilkarr";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
if (!$conn) {
  die("연결 실패: ".mysqli_connect_error());
}

$sql = "Insert into movie_director (id, name, birthday) Values (9, '제임스 카메론', '1954-08-16'); ";

if (mysqli_query($conn,$sql)) {
  echo "새 레코드가 성공적으로 생성되었습니다.";
} else {
  echo "생성 실패: " .mysqli_error($conn);
}

mysqli_close($conn);