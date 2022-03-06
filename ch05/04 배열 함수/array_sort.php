<?php
header('content-type:text/html; charset=euc-kr');

$fruits = [
    'apple' => '사과',
    'banana' => '바나나',
    'strawberry' => '딸기',
    'grape' => '포도',
    'watermelon' => '수박',
];

$fruits2 = $fruits;
$fruits3 = $fruits;

sort($fruits);
echo "sort:"."<pre>";
print_r($fruits);
echo "</pre>";

rsort($fruits);
echo "rsort:"."<pre>";
print_r($fruits);
echo "</pre>";

ksort($fruits2);
echo "ksort:"."<pre>";
print_r($fruits2);
echo "</pre>";

krsort($fruits2);
echo "krsort:"."<pre>";
print_r($fruits2);
echo "</pre>";

asort($fruits3);
echo "asort:"."<pre>";
print_r($fruits3);
echo "</pre>";

arsort($fruits3);
echo "arsort:"."<pre>";
print_r($fruits3);
echo "</pre>";
