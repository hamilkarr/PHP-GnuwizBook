<?php
header('content-type:text/html; charset=euc-kr');

$languages = [
    'PHP',
    'MySQL',
    'HTML',
    'CSS',
    'JavaScript',
];

$filter = array_filter($languages, function ($val) 
{
    if (strlen($val) <= 4) {
        return true;
    } else {
        return false;
    }
});

echo "<pre>";
print_r($filter);
echo "</pre>";

$map = array_map(function($val) {
    $upper_string = strtoupper($val);
    return $upper_string;
}, $languages);

echo "<pre>";
print_r($map);
echo "</pre>";

$reduce = array_reduce($languages, function($carry,$item) {
    $len = strlen($item);
    echo $carry;
    $result = $carry + $len;
    return $result;
}, 0);

echo "<pre>";
print_r($reduce);
echo "</pre>";