<?php
header('content-type:text/html; charset=euc-kr');
$cookie_name = "myCookie";
$cookie_value = "ȫ�浿";
setcookie($cookie_name,$cookie_value,time() + 86400 * 30);
?>
<!DOCTYPE html>
<html lang="en">
<head>  
  <title>Create Cookie</title>
</head>
<body>
  <h1>Cookie Example</h1>
  ��Ű�� ����ϴ�. <br/>
  ��Ű ������ <a href="./result_cookie.php">�����</a>!!!
</body>
</html>