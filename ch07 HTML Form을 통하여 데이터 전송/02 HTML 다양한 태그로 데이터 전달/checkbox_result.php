<?php
header('content-type:text/html; charset=euc-kr');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="euc-kr">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>title</title>
</head>
<body>
  <header>
    <h1>Checkbox Example</h1>
    <?php
      if (isset($_POST['fruit'])) {
        echo "������ ������ <br/>";
        for($i=0; $i<count($_POST['fruit']); $i++) {
          $fruit = $_POST['fruit'][$i];
          echo $fruit."<br/>";
        }
        echo "�Դϴ�.";
      } else {
        echo "������ ������ �����ϴ�.";
      }
    ?>
  </header>
  <main>
    <h2>Page Title</h2>
  </main>
  <footer>
    <p>&copy;</p>
  </footer>
  <script src=""></script>
</body>
</html>