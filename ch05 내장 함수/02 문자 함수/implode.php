<?php
header('content-type:text/html; charset=euc-kr');

// $str = [ 'www', 'gnuwiz', 'com'];

// echo implode(array: $str)."<br/>";
// echo implode(separator: '.', array: $str)."<br/>";
// echo "<br/>";

// echo join(array: $str)."<br/>";
// echo join(separator: '.', array: $str)."<br/>";
// echo "<br/>";


$str = [ // �迭����
    'www',
    'gnuwiz',
    'com',
];
// implode() �Լ� ���
echo implode( $str)."<br/>"; // ���� �Ű����� ���Ұ�
echo implode(separator: '.', array: $str)."<br/>";
echo "<br/>";
// join() �Լ� ���
echo join( $str)."<br/>"; // ���� �Ű����� ���Ұ�
echo join(separator: '.', array: $str)."<br/>";
echo "<br/>";