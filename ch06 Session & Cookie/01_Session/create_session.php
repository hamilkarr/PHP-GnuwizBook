<?php
header('content-type:text/html; charset=euc-kr');
session_start();
$session_value="ȫ�浿";
$_SESSION['mySession'] = $session_value;
?>

<!DOCTYPE html>
<html lang="en">
<head>  
  <title>Create Session</title>
</head>
<body>
  <h1>Session Example</h1>
  ������ ����ϴ�. <br/>
  ���� ������ <a href="./result_session.php">�����</a>!!!
</body>
</html>