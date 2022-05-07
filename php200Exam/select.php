<?php 
include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

$sql = "SELECT name, userId FROM mymember order by name desc limit 2,3";
$result = $dbConnect->query($sql);

$dataCount = $result->num_rows;

for ($i=0; $i < $dataCount; $i++) { 
    $memberInfo =  $result->fetch_array(MYSQLI_BOTH);
    echo "이름: ".$memberInfo['name'];
    echo "<br>";
    echo "아이디: ".$memberInfo['userId'];
    echo "<hr>";
}

$sql2 = "SELECT name, userId From mymember Where myMemberID = 2";
$result2 = $dbConnect->query($sql2);

$memberInfo2 = $result2->fetch_array(MYSQLI_ASSOC);
echo "이름: ".$memberInfo2['name']."<br>";
echo "아이디: ".$memberInfo2['userId']."<br>";
