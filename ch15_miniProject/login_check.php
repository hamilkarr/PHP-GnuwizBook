<?php
header('content-type:text/html; charset=euc-kr');
include("./dbconn.php");

$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);

if (!$mb_id || !$mb_password) {
  echo "<script>alert('회원아이디 또는 비밀번호를 입력하세요.');</script>";
  echo "<script>location.replace('./index.php');</script>";
  exit;
}

// 해당 아이디가 존재하는지 체크
$sql = "Select * from gnu_member Where mb_id = '$mb_id' ";
$result = mysqli_query($conn,$sql); // 쿼리문을 사용해서 데이터베이스에서 아이디를 검색.
$mb = myslqi_fetch_assoc($result); // 조회한 회원 정보의 결과를 $mb변수에 저장.

// 입력한 비밀번호를 MySQL_password()함수를 이용해서 암호화 해서 가져옴.
$sql = "Select PASSWORD('$mb_password') as Pass "; // PASSWORD 소문자도 가능한지 시도해볼것.
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
echo $row."<br/>"; // sql password 함수 작동하는지 출력해봄.
$password = $row['pass'];

if (!$mb['mb_id'] || !($password == $mb['mb_passworld'])) {
  echo "<script>alert('가입한 아이디가 아니거나, 비밀번호가 틀립니다.')</script>";
  echo "<script>location.replace('./index.php');</script>";
  exit;
}

$_SESSION['ss_mb_id'] = $mb_id;
mysqli_close($conn);

if(isset($_SESSION['ss_mb_id'])) {
  echo "<script>alert('로그인 되었습니다.')</script>";
  echo "<script>location.replace('./member_list.php');</script>";
}