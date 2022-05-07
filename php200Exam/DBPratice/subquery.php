<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "SELECT *, (SELECT avg(English) From schoolRecord) as englishAVG FROM schoolRecord;";

    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i=0; $i < $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "<pre>";
        print_r($memberInfo);
        echo "</pre>";
    }