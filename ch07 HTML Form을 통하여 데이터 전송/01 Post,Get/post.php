<?php
header('content-type:text/html; charset=euc-kr');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Post</title>
</head>
<body>
  <h1>Post Example</h1>
  <form action="./post_result.php" method="post">
    �̸� : <input type="text" name="name" ><br/>
    ���̵� : <input type="text" name="id" ><br/>
    �̸��� : <input type="email" name="email" ><br/>
    <input type="submit" value="����">
  </form>
</body>
</html>