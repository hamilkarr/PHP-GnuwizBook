<?php
header('content-type:text/html; charset=euc-kr');

$fruits = [
    'apple'=>'���',
    'banana'=>'�ٳ���',
    'strawberry'=> '����',
    'grape'=>'����',
    'watermelon'=>'����',
    'kiwi'=>'Ű��',
    'mango'=>'����',
    'cherry'=>'�޵�',
    'peach'=>'������',
];

$vegetables = [
    'celery' => '������',
    'cucumber' => '����',
    'carrot' => '���',
    'pepper' => '����',
    'garlic' => '����',
    'ginger' => '����',
    'watermelon' => '����',
    'tomato' => '�丶��',
    'strawberry' => '����',
];

$merge = array_merge($fruits, $vegetables);
echo "<pre>";
print_r($merge);
echo "</pre>";

$intersec = array_intersect($fruits, $vegetables);
echo "<pre>";
print_r($intersec);
echo "</pre>";
