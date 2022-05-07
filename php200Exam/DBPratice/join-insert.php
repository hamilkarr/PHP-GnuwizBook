<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $reviewList = array();
    $reviewList[0] = [1, "초보자한테 좋아요."];
    $reviewList[1] = [2, "정말 초보자한테 좋은 책이지만 깊이감은 조금 아쉽습니다."];
    $reviewList[2] = [3, "좋습니다."];
    $reviewList[3] = [4, "웹 개발을 처음 하는 사람에게 있어 참 친절한 입문서 입니다."];    

    $cnt = 0;

    foreach ($reviewList as $rl) {
        $sql = "INSERT Into prodreview(myMemberID, content, regTime) VALUES($rl[0], '{$rl[1]}', NOW())";

        $result = $dbConnect->query($sql);
        $cnt++;

        if($result){
            echo $cnt.' 데이터 입력 성공. <br>';
        }else {
            echo $cnt.' 데이터 입력 실패. <br>';
        }
    }