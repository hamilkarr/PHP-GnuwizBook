<?php
header('Content-Type: text/html; charset=euc-kr');

$fruits = [
  "apple" => "���",
  "strawberry" => "����",
  "banana" => "�ٳ���",
];

echo "���� ��� <br/>";
foreach ($fruits as $fruit) {
  echo "{$fruit}<br/>";
}

echo "<br/>";

echo "Ű�� ���� ��� ���<br/>";
foreach ($fruits as $eng => $kor) {
  echo "{$eng}=>{$kor}<br/>";
}