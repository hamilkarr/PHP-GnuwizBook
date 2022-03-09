<?php
header('content-type:text/html; charset=euc-kr'); ?>

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
    <h1>CheckBox Example</h1>
    <form action="./checkbox_result.php" method="post">
      <input type="checkbox" name="fruit[]" value="사과">사과
      <input type="checkbox" name="fruit[]" value="포도">포도
      <input type="checkbox" name="fruit[]" value="딸기">딸기
      <input type="checkbox" name="fruit[]" value="바나나">바나나<br/>
      <input type="submit" value="전송">
    </form>
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