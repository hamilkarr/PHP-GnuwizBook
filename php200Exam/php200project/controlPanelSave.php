<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connection.php';

    $selectorName = $_POST['selectorName'];

    if($selectorName == ''){
        echo '값을 입력하세요.';
    }else{
        $float = $_POST['float'];
        $width = (int) $_POST['width'];
        $height =(int) $_POST['height'];
        $background = $_POST['background'];
        
        $marginTop =(int) $_POST['marginTop'];
        $marginRight =(int) $_POST['marginRight'];
        $marginBottom =(int) $_POST['marginBottom'];
        $marginLeft =(int) $_POST['marginLeft'];
        
        //update 
        $sql = "UPDATE controlCSS set floata = '{$float}',";
        $sql .= " width = '{$width}', height= '{$height}',";
        $sql .= " background = '{$background}', marginTop = '{$marginTop}',";
        $sql .= " marginRight = '{$marginRight}', marginBottom = '{$marginBottom}',";
        $sql .= " marginLeft = '{$marginLeft}' Where selectorName = '{$selectorName}';";

        echo $sql;

        // try {
        //     $result = $dbConnect->query($sql);
        // } catch (Exception $e) {
        //     echo "message: ".$e->getMessage();
        // }
        $result = $dbConnect->query($sql);
        if($result){
            echo "변경 완료";
        }else{
            echo "변경 실패";
        }
    }

    echo '<br>';
    echo "<a href='./index.php'>CSS 디자인 페이지로 이동</a>";
    echo '<br>';
    echo "<a href='./controlPanel.php'>CSS 컨트롤 페이지로 이동</a>";
?>