<?php
header('content-type:text/html; charset=euc-kr');
session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['ss_mb_id'])) {
  echo "<script>alert('로그아웃 되었습니다.')</script>";
  echo "<script>location.replace('./index.php')</script>";
  exit;
}