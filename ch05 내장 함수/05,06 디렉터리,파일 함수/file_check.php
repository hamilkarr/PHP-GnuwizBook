<?php
header('content-type:text/html; charset=euc-kr');
$directory = "./";
if(is_dir($directory)) {
    echo "{$directory} ���͸��� �ֽ��ϴ�. <br/>";
} else {
    echo "{$directory} ���͸��� �����ϴ�. <br/>";
}

$directory = "../../ch05";
if(is_dir($directory)) {
    echo "{$directory} ���͸��� �ֽ��ϴ�. <br/>";
} else {
    echo "{$directory} ���͸��� �����ϴ�. <br/>";
}

$file = basename(__FILE__);
if(is_file($file)) {
    echo "{$file} ������ �ֽ��ϴ�.<br/>";
} else {
    echo "{$file} ������ �����ϴ�.<br/>";
}

if(file_exists($directory)) {
    echo "{$directory} �����̳� ���͸��� �ֽ��ϴ�.<br/>";
} else {
    echo "{$directory} �����̳� ���͸��� �����ϴ�.<br/>";
}


if(file_exists($file)) {
    echo "{$file} �����̳� ���͸��� �ֽ��ϴ�.<br/>";
} else {
    echo "{$file} �����̳� ���͸��� �����ϴ�.<br/>";
}