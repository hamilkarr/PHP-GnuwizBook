<?php
header('content-type:text/html; charset=euc-kr');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Get</title>
</head>
<body>
  <h1>Get Example</h1>
  <form action="./get_result.php" method="get">
    �̸�: <input type="text" name="name"><br/>
    ���̵�: <input type="text" name="id"><br/>
    �̸���: <input type="email" name="email"><br/>
    <input type="submit" value="����">
  </form>
</body>
</html>