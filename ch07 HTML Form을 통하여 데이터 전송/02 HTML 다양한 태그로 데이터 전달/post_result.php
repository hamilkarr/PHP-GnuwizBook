<?php
header('content-type:text/html; charset=euc-kr');
$name = $_POST["name"];
$id = $_POST['id'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Post Result</title>
</head>
<body>
  <h1>Post Example</h1>
  <?php echo "{$name} ���� ���̵�� {$id}, �̸��� �ּҴ� {$email} �Դϴ�."; ?>
</body>
</html>