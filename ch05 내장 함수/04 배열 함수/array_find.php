<?php
header('content-type:text/html; charset=euc-kr');

$fruits = [
    'apple' =>'사과',
    'banana' => '바나나',
    'strawberry'=> '딸기',
    'grape' => '포도',
    'watermelon'=>'수박',
    'kiwi'=> '키위',
    'mango'=>'망고',
    'tomato'=>'토마토',
];

$find_key = 'kiwi';
if (array_key_exists($find_key,$fruits)) {
    echo "\$fruits 배열에 {$find_key} 키가 있음<br/>";
} else {
    echo "\$fruits 배열에 {$find_key} 키가 없음";
};

$find_value = '호박';
if(in_array($find_value, $fruits)) {
    echo "\$fruits 배열에 {$find_value} 값이 있음<br/>";
} else {
    echo "\$fruits 배열에 {$find_value} 값이 없음<br/>";
}

$find_value2 = '망고';
$finded_key = array_search($find_value2, $fruits);
echo $finded_key."<br/>";

$keys = array_keys($fruits);
echo "<pre>";
print_r($keys);
echo "</pre>";

$values = array_values($fruits);
echo "<pre>";
print_r($values);
echo "</pre>";
