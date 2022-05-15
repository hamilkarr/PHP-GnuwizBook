<?php
    $data = json_encode(
        array(
            'result' => 'success',
            'data' => array(
                'english'=>100,
                'math'=>95,
            )
        )
    );
    echo gettype($data)."<hr>";
    $data = json_decode($data,true);
    echo gettype($data)."<hr>";
    print_r($data);
?>