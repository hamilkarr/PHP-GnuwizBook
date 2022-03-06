<?php
header("content-type: text/html; charset=euc-kr");

try {
    throw new Exception("Error Processing Request");
    
    
} catch (Throwable $e) {
    echo $e->getMessage();
    echo "<br/>";
} finally {
    echo "finally 블락입니다.";
}