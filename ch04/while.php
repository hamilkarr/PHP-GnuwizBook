<?php
header('Content-Type: text/html; charset=euc-kr');

$i = 1;

while ($i < 10) {
  echo $i."<br/>";
  $i++;
}

echo "=====================<br/>";
$j = 0;

do {
  echo $j."<br/>";
  $j++;
} while ($j < 10);