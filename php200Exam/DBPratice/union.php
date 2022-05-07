<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "(SELECT name, email From dropOutOld)";
    $sql .= " UNION ";
    $sql .= "(Select name, email From dropOutNew)";

    $result = $dbConnect->query($sql);
    

    $dataCount = $result->num_rows;

    for($i=0; $i < $dataCount; $i++){
        $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "이름: ".$memberInfo['name'];
        echo "<br>";
        echo "이메일: ".$memberInfo['email'];
        echo "<hr>";
    }