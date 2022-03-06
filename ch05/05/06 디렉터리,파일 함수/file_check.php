<?php
header('content-type:text/html; charset=euc-kr');
$directory = "./";
if(is_dir($directory)) {
    echo "{$directory} 디렉터리가 있습니다. <br/>";
} else {
    echo "{$directory} 디렉터리가 없습니다. <br/>";
}

$directory = "../../ch05";
if(is_dir($directory)) {
    echo "{$directory} 디렉터리가 있습니다. <br/>";
} else {
    echo "{$directory} 디렉터리가 없습니다. <br/>";
}

$file = basename(__FILE__);
if(is_file($file)) {
    echo "{$file} 파일이 있습니다.<br/>";
} else {
    echo "{$file} 파일이 없습니다.<br/>";
}

if(file_exists($directory)) {
    echo "{$directory} 파일이나 디렉터리가 있습니다.<br/>";
} else {
    echo "{$directory} 파일이나 디렉터리가 없습니다.<br/>";
}


if(file_exists($file)) {
    echo "{$file} 파일이나 디렉터리가 있습니다.<br/>";
} else {
    echo "{$file} 파일이나 디렉터리가 없습니다.<br/>";
}