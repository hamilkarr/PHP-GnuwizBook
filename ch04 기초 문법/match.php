<?php
header('Content-Type: text/html; charset=euc-kr');
// $input = true;

// switch($input) {
//   case "true":
//     $result = "1번째 결과";
//     break;

//   case "false":
//     $result ="2번째 결과";
//     break;

//   case "null":
//     $result ="3번째 결과";
//     break;

//     case "true":
//     $result = "4번째 결과";
//     break;

//   case "false":
//     $result ="5번째 결과";
//     break;

//   case "null":
//     $result ="6번째 결과";
//     break;


// }

// $input = true;

// $result = match ($input) {
//     "true" => "1번째 결과",
//     "false" => "2번째 결과",
//     "null" => "3번째 결과",
//     true => "4번째 결과",
//     false => "5번째 결과",
//     null => "6번째 결과",
// };

// echo $result;

$input = "";
$result = match ($input) {
  "true", true => "1번째 결과",
  "false", false => "2번째 결과",
  "null", null => "3번째 결과",
  default => "결과 없음",
};

echo $result;