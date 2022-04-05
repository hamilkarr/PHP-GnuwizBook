<?php
    header('content-type:text/html; charset=euc-kr');
    echo "DOCUMENT_ROOT is ".$_SERVER['DOCUMENT_ROOT'].'<br>';
    echo 'HTTP_ACCEPT_LANGUAGE is '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<BR>';
    echo 'HTTP_HOST is'.$_SERVER['HTTP_HOST'].'<BR>';
    ECHO 'HTTP_USER_AGENT IS'.$_SERVER['HTTP_USER_AGENT'].'<BR>';
    ECHO 'SERVER_PORT IS'.$_SERVER['SERVER_PORT'].'<BR>';
    ECHO 'SCRIPT_NAME IS '.$_SERVER['SCRIPT_NAME'].'<BR>';
    ECHO 'REQUEST_URI IS '.$_SERVER['REQUEST_URI'].'<BR>';
    ECHO 'PHP_SELF IS '.$_SERVER['PHP_SELF'].'<BR>';
    ECHO 'QUERY_STRING IS '.$_SERVER['QUERY_STRING'].'<BR>';