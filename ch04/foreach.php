<?php
header('Content-Type: text/html; charset=euc-kr');

$fruits = [
  "apple" => "사과",
  "strawberry" => "딸기",
  "banana" => "바나나",
];

echo "값만 사용 <br/>";
foreach ($fruits as $fruit) {
  echo "{$fruit}<br/>";
}

echo "<br/>";

echo "키와 값을 모두 사용<br/>";
foreach ($fruits as $eng => $kor) {
  echo "{$eng}=>{$kor}<br/>";
}