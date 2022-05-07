<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "SELECT m.name, r.content, r.regTime From mymember m Join prodreview r ";
    $sql .="On (m.myMemberID = r.myMemberID);";
    echo $sql."<br>";

    $result = $dbConnect->query($sql);

    if($result) {
        $dataCount = $result->num_rows;

    //     echo $dataCount;
    // } else {
    //     echo "결과 없음";
        for($i = 0; $i < $dataCount; $i++){
            $reviewInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "{$reviewInfo['regTime']} - {$reviewInfo['name']}님, {$reviewInfo['content']}";
            echo "<br>";
        }
    }