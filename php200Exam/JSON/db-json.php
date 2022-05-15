<?php
    // echo $_SERVER['DOCUMENT_ROOT']."../connectDB.php";
    // exit;
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "SELECT * FROM myMember";
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    $memberList = array();
    for($i=0; $i< $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        // print_r($memberInfo);
        // exit;
        array_push($memberList,$memberInfo);
    }

    echo json_encode(
        array(
            'data' => $memberList,
        )
    );