<?php
header('Content-Type: text/html; charset=euc-kr');
$score = 90;
switch ($score) {
  case 100:
    echo "점수는 100점 입니다.";
    break;
  case 90:
    echo "점수는 90점 입니다.";
    break;
  case 80:
    echo "점수는 80점 입니다.";
    break;  
  default:
    echo "점수는 70점 입니다.";
    break;
  }
  phpinfo();
