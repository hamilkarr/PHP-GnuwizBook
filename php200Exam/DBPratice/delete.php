<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    /*
    $sql = "DELETE from mymember Where myMemberID = 4";
    $result = $dbConnect->query($sql);

    if($result) {
        echo "삭제 성공 <br>";
        $sql = "Select myMemberID,phone From mymember";
        $result = $dbConnect->query($sql);

        $dataCount = $result->num_rows;

        echo "현재의 회원 <br>";
        for($i=0; $i < $dataCount; $i++){
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "회원번호 {$memberInfo['myMemberID']}";
            echo "<br>";
        }
    } else {
        echo "변경 실패";
    }
    */

    $sql = "TRUNCATE mymember";
    $result = $dbConnect->query($sql);

    if($result){
        echo "초기화 성공";
    } else {
        echo "초기화 실패";
    }

    