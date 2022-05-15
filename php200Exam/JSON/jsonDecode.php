<?php
    $data = file_get_contents('./student.json');

    if($data !== false){
        $data = json_decode($data, true);
        echo "데이터형: ".gettype($data)."<br>";
        echo "{$data['student'][0]['score']['math']}";
        echo "<br><pre>";
        print_r($data);
        echo "</pre>";
    }else{
        echo "Fail";
    }