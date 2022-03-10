<?php
$mysql_host = "hamilkarr.cafe24.com";
$mysql_user = "hamilkarr";
$mysql_password = "aA!13579";
$mysql_db ="hamilkarr";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if(!$conn) {
  die("���� ����: ".mysqli_connect_error());
}

$sql ="Update movie_director Set name = '홍길동' Where id =9 ";

if (mysqli_query($conn, $sql)) {
  echo "레코드를 성공적으로 업데이트 했습니다..";
} else {
  echo "업데이트 실패: ".mysql_error($conn);
}