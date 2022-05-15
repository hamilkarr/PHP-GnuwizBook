<?php
    $myTempFile = $_FILES['imgFile']['tmp_name'];
    $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

    $fileType = $fileTypeExtension[0];
    $extension = $fileTypeExtension[1];

    $isExtGood = false;

    switch ($extension) {
        case 'jpeg':
        case 'bmp':
        case 'gif':
        case 'png':
        $isExtGood = true;
        break;

        default:
            echo "허용되는 확장자는 jpg, bmp, gif, png 입니다. - switch";
            exit;
            break;
    }

    if($fileType == 'image'){
        if($isExtGood){
            $myFile = "./happyCat.{$extension}";
            $imageUpload = move_uploaded_file($myTempFile,$myFile);

            if($imageUpload == true){
                echo "파일이 정상적으로 업로드 됨. <br>";
                echo "<img src='{$myFile}' width='50%' />";
            }else{
                echo '파일 업로드 실패';
            }

        }else{
            echo "허용되는 확장자가 아닙니다.";
            exit;
        }

    }else{
        echo "이미지 파일이 아닙니다..";
        exit;
    }
?>