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
                echo "���� �б⿡ ����";
            }
        }else{
            echo "���� ���⿡ ����";
        }
    }else{
        echo "������ ����";
    }
