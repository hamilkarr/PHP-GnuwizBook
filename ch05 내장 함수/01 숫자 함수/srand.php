<?php
header('content-type:text/html; charset=euc-kr');

for($i=0; $i<5; $i++) {
    srand();
    echo rand()."<br/>";
}