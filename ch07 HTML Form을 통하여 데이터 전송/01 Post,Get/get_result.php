<?php
header('content-type:text/html; charset=euc-kr');
$name = $_GET['name'];
$id = $_GET['id'];
$email = $_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Get Example</title>
</head>
<body>
  <h1>Get Example</h1>
  <?php echo "{$name} ���� ���̵�� {$id}, �̸��� �ּҴ� {$email} �Դϴ�."; ?>
</body>
</html>