<?php
header('Content-Type: text/html; charset=euc-kr');
$str1 ="안녕하세요";
$str2 = "저는 PHP를 공부합니다.";
echo "두문자열을 합친 문자열은 ". $str1.$str2 ." 입니다. <br/>";

$str = "안녕하세요.";
$str .="저는 PHP를 공부합니다.";
echo "두 문자열을 합친 문자열은 ".$str ."입니다.<br/>";

$arr1 = ["1"=>"키위","2" =>"멜론"];
$arr2 = ["1"=>"딸기","2"=>"수박","3"=>"오렌지"];
$result1 = $arr1 + $arr2;
// echo $result1;
echo "<br/>";
print_r($result1);
echo "<br/>";

class MyClass {}

$my_Class = new MyClass();
$result = $my_Class instanceof MyClass;
echo $result;

?>