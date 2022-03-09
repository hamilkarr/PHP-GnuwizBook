<?php
header('content-type:text/html; charset=euc-kr');
$text = "안녕하세요 저는 홍길동 입니다.
이렇게 여러 줄을 입력하였습니다.";
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
    <form action="./textarea_result.php" method="post">
      <textarea name="text" id="" cols="50" rows="10"><?php echo $text; ?></textarea>
      <br/>
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