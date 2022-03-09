<?php
header('content-type:text/html; charset=euc-kr');
$name="È«±æµ¿";
$id ='hong';
$email = 'hong@eto.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Hidden</title>
</head>
<body>
  <h1>Hidden Example</h1>
  <form action="./post_result.php" method="post">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">
    <input type="submit" value="Àü¼Û">
  </form>
</body>
</html>