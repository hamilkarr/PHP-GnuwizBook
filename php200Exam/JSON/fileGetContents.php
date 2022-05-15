<?php
    $data = file_get_contents("./student.json");
    if($data !== false) {
        echo "데이터형: ".gettype($data)."<br>";
        echo $data;
    }else{
        echo "Fail";
    }
?>
