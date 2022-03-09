<?php
header('content-type:text/html; charset=euc-kr');

$name = "홍길동";
$id = "hong";
$email = "hong@eto.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Document</title>
</head>
<body>
  <h1>Get Example2</h1>
  <a href="./get_result.php?name=<?php echo $name; ?>&id=<?php echo $id; ?>&email=<?php echo $email; ?>">전송</a>
</body>
</html>