<?php
header('content-type:text/html; charset=euc-kr');
session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['ss_mb_id'])) {
  echo "<script>alert('�α׾ƿ� �Ǿ����ϴ�.')</script>";
  echo "<script>location.replace('./index.php')</script>";
  exit;
}