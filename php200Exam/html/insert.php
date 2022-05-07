<?php
    
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';
    include $_SERVER['DOCUMENT_ROOT'].'/form-post.php';
    

    $uBirthDay = $_POST["birthYear"].'-'.$_POST["birthMonth"].'-'.$_POST["birthDay"];
    $sql = "INSERT INTO mymember (userId, name, password, phone, email, birthDay, gender, regTime)";
    $sql .= " VALUES ('{$_POST["userId"]}', '{$_POST["userName"]}', '{$_POST["userPw"]}', '{$_POST["userPhone"]}', '{$_POST["userEmail"]}', '{$uBirthDay}', '{$_POST["userGender"]}', NOW())";

    // echo $sql;
    // exit;
    $result = $dbConnect->query($sql);
    // print_r($result);
    // exit;

    if($result) {
        $sql = "SELECT userId, name From mymember";
        $result = $dbConnect->query($sql);


        $dataCount = $result->num_rows;

        for ($i=0; $i < $dataCount; $i++) { 
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            echo '아이디 : '.$memberInfo['userId'];
            echo '<br>';
            echo '이름 : '.$memberInfo['name'];
            echo '<hr>';
        }
    } else {
        echo "입력 실패";
    }