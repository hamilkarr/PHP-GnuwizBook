<?php
    
    $fileNamePath = "./text.txt";

    if($fileNamePath){
        $fp = fopen($fileNamePath,'r');
        if($fp){
            $fr = fread($fp, filesize($fileNamePath));
            if($fr){
                echo nl2br($fr);
                fclose($fp);
            }else{
                echo "파일 읽기에 실패";
            }
        }else{
            echo "파일 열기에 실패";
        }
    }else{
        echo "파일이 없음";
    }
