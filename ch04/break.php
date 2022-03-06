<?php
header('Content-Type: text/html; charset=euc-kr');
// for ($i = 1; $i <=10; $i++) {
//   echo $i."<br/>";
//   if($i == 5) {
//     break;
//   }
// }

// for ($i= 1; $i <=50; $i++) {
//   if($i %2 ==0) {
//     continue;
//   }
//   echo "{$i}<br/>";
// }

goto jump;

echo "PHP공부 하기 싫어요.";

jump:
echo "PHP공부가 재미있어요.";