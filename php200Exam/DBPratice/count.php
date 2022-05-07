<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "SELECT class, avg(english) as avgEng FROM schoolRecord GROUP BY class ";
    $result = $dbConnect->query($sql);

    $dataCount = $result->num_rows;

    for($i=0; $i < $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "반: {$memberInfo['class']} <br>";
        echo "평균 영어 점수: {$memberInfo['avgEng']}";
        echo "<hr>";
    }