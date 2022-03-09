<?php
$array = [1,2,3,4,5,"key7"=>7];

echo "<pre>";
print_r($array);
echo "</pre>";
echo $array['key7']."<br/>";
echo $array[0]."<br/>";

class myClass {}

$myClass = new myClass();
var_dump($myClass);