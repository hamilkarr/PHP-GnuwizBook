<?php
header('content-type:text/html; charset=euc-kr');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
  <title>Result Session</title>
</head>
<body>
  <h1>Session Example</h1>
  ���� ���� : <?php echo $_SESSION['mySession']; ?> �Դϴ�.
</body>
</html>