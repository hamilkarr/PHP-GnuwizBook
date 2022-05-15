<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/connection.php';

    /*
    $loadCheck = get_included_files();
    foreach ($loadCheck as $fileName) {
        echo $fileName;
    }
    */

    $selectorList = array();
    $selectorList = ['wrap', 'header', 'leftArea', 'rightArea', 'footer'];
    
    foreach ($selectorList as $sl) {
        $sql = "INSERT INTO controlCSS (selectorName, floata, width, height, background, marginTop, marginRight, marginBottom, marginLeft)";
        $sql .= " VALUES ('{$sl}', 'unset', 0, 0, '', 0, 0, 0, 0)";
        // echo $sql;
        // exit;
        $result = $dbConnect->query($sql);

        if($result){
            echo "Input {$sl} Success!";
        }else{
            echo "Fail Input {$sl}";
        }
        echo "<br>";
    }

?>