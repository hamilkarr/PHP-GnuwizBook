<?php
header('content-type:text/html; charset=euc-kr');

$fruits = [
    'apple' =>'���',
    'banana' => '�ٳ���',
    'strawberry'=> '����',
    'grape' => '����',
    'watermelon'=>'����',
    'kiwi'=> 'Ű��',
    'mango'=>'����',
    'tomato'=>'�丶��',
];

$find_key = 'kiwi';
if (array_key_exists($find_key,$fruits)) {
    echo "\$fruits �迭�� {$find_key} Ű�� ����<br/>";
} else {
    echo "\$fruits �迭�� {$find_key} Ű�� ����";
};

$find_value = 'ȣ��';
if(in_array($find_value, $fruits)) {
    echo "\$fruits �迭�� {$find_value} ���� ����<br/>";
} else {
    echo "\$fruits �迭�� {$find_value} ���� ����<br/>";
}

$find_value2 = '����';
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
