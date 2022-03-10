<?php

$mysql_host = "hamilkarr.cafe24.com";
$mysql_user = "hamilkarr";
$mysql_password = "aA!13579";
$mysql_db="hamilkarr";

$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

if (!$conn) {
  die("연결 실패: ".mysqli_connect_error());
}

$sql = "Delete From movie_director Where name = '홍길동' ";

if (mysqli_query($conn, $sql)) {
  echo "레코드를 성공적으로 삭제했습니다."; } 
  else {
    echo "삭제 실패: ".mysqli_error($conn);
  }

  mysqli_close($conn);
?>