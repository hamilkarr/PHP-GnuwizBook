<?php
  header('content-type:text/html; charset=euc-kr');

  $str = "123문자열";
  echo "변경 전의 데이터형 ".gettype($str)."<br>";

  $str = (int) $str;
  echo "변경 후의 데이터형 ".gettype($str). " 값은 {$str} <br>";

  $double = 86.44;
  echo "변경 전의 데이터형 ".gettype($double). "<br>";

  $double = (int) $double;
  echo "변경 후의 데이터형" . gettype($double). " 값은 {$double} <br>";

  $gender = 'boy';
  $likePlace = 'disneyland';

  if ($gender == 'boy' && $likePlace == 'disneyland') {
      echo '소년은 디즈니랜드를 좋아합니다.';
  }
  echo "<br>";

  $girl = array();
  $girl = ['gender'=>'girl','likePlace'=>'Universal studio'];

  if($girl['gender'] == 'girl' && $girl['likePlace'] == 'disneyland') {
      echo "소녀는 디즈니랜드를 좋아합니다.";
  } else if($girl['gender'] == 'girl' && $girl['likePlace'] == 'Universal studio') {
      echo "소녀는 유니버셜 스튜디오를 좋아합니다.";
  } else {
      echo "소녀는 집순이 입니다.";
  }
  

