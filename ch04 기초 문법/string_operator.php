<?php
header('Content-Type: text/html; charset=euc-kr');
$str1 ="�ȳ��ϼ���";
$str2 = "���� PHP�� �����մϴ�.";
echo "�ι��ڿ��� ��ģ ���ڿ��� ". $str1.$str2 ." �Դϴ�. <br/>";

$str = "�ȳ��ϼ���.";
$str .="���� PHP�� �����մϴ�.";
echo "�� ���ڿ��� ��ģ ���ڿ��� ".$str ."�Դϴ�.<br/>";

$arr1 = ["1"=>"Ű��","2" =>"���"];
$arr2 = ["1"=>"����","2"=>"����","3"=>"������"];
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