<?php
header('Content-Type: text/html; charset=euc-kr');
// $input = true;

// switch($input) {
//   case "true":
//     $result = "1��° ���";
//     break;

//   case "false":
//     $result ="2��° ���";
//     break;

//   case "null":
//     $result ="3��° ���";
//     break;

//     case "true":
//     $result = "4��° ���";
//     break;

//   case "false":
//     $result ="5��° ���";
//     break;

//   case "null":
//     $result ="6��° ���";
//     break;


// }

// $input = true;

// $result = match ($input) {
//     "true" => "1��° ���",
//     "false" => "2��° ���",
//     "null" => "3��° ���",
//     true => "4��° ���",
//     false => "5��° ���",
//     null => "6��° ���",
// };

// echo $result;

$input = "";
$result = match ($input) {
  "true", true => "1��° ���",
  "false", false => "2��° ���",
  "null", null => "3��° ���",
  default => "��� ����",
};

echo $result;