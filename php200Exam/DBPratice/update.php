<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "Update mymember Set phone = '010-1234-5678';";
    $result = $dbConnect->query($sql);

    if($result) {
        echo "변경성공 <br>";
        $sql = "Select userId, phone From mymember";
        $result = $dbConnect->query($sql);

        $dataCount = $result->num_rows;

        for($i=0; $i < $dataCount; $i++){
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo "회원번호 {$memberInfo['userId']}의 ";
            echo "휴대폰번호는 ".$memberInfo['phone'];
            echo "<br>";
        }
        
    } else {
        echo "변경 실패 <br>";
    }