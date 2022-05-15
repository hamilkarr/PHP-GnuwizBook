<?php
    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $email = $_GET['email'];

    $emailValidateCheck = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($emailValidateCheck){
        $sql = "SELECT email From myMember Where email = '{$email}'";
        $result = $dbConnect->query($sql);
        

        $dataCount = $result->num_rows;
        for($i=0; $i<$dataCount; $i++){
            $emailLog = $result->fetch_array(MYSQLI_ASSOC);
            print_r($emailLog);
        }

        $emailCheck = 'none';
        if($dataCount > 0) {
            $emailCheck = 'exist';
        }

        echo json_encode(
            array(
                'result'=> $emailCheck,
            )
        );
    }else{
        echo json_encode(
            array(
                'result'=> 'notEmail',
            )
        );
    }
?>