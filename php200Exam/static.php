<?php
    header('content-type:text/html; charset=euc-kr');

    class hello {
        public static function output($word) {
            echo $word;
        }
    }

    hello::output('hello world');