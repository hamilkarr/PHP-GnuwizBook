<?php
    $host = "localhost:3306";
    $user = "root";
    $password= "aA!12345";
    $dbName = "php200project";
    $dbConnect = new mysqli($host, $user, $password, $dbName);
    $dbConnect->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "DB Connection Fail";
    }