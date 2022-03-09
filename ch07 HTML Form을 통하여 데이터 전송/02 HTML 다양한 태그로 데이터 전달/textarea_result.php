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
    <h1>Textarea Example</h1>
    <?php echo nl2br($_POST['text']); ?>
    <?php // echo $_POST['text'] ?>
    <!-- nl2br은 새로운 줄을 표시하는 기호를 HTML에서 인식할 수 있도록 br 태그로 변환해 주는 역할 -->
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