<?php
    header('content-type:text/html; charset=euc-kr');

    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    /*
    $sql = "SHOW TABLES";
    $res = $dbConnect->query($sql);

    if($res) {
        $list = $res->fetch_array(MYSQLI_BOTH);

        echo "<BR> 테이블목록 <br>";

        for($i = 0; $i < (count($list)-1); $i++){
            echo $list[$i];
            echo "<br>";
        }
    } else {
        echo "테이블이 엄슴";
    }
    */

    $sql = "DESC mymember";
    $res = $dbConnect->query($sql);
    
    

    while($list = $res->fetch_array(MYSQLI_ASSOC)) {
        echo 'Field: '.$list['Field'];
        echo '<br>';
    }
    