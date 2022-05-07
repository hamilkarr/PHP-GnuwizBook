<?php
    fscanf(STDIN, "%d",$a);
    if($a%4 == 0) {
        if($a%100!=0 || $a%400==0) {
            echo 1;
        } else {
            echo 0;
        }
    }else{
        echo 0;
    }