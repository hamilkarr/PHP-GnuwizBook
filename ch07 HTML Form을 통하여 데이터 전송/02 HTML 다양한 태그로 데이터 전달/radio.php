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
    <h1>Radio Example</h1>
    <form action="./post_result.php" method="post">
      �̸�: 
      <input type="radio" name="name" value="ȫ�浿">ȫ�浿
      <input type="radio" name="name" value="�Ӳ���">�Ӳ���
      <input type="radio" name="name" value="����">����
      <br/>

      ���̵�: 
      <input type="radio" name="id" value="hong">hong
      <input type="radio" name="id" value="im">im
      <input type="radio" name="id" value="jang">jang
      <br/>

      �̸���
      <input type="radio" name="email" value="hong@eto.com">hong@eto.com
      <input type="radio" name="email" value="im@eto.com">im@eto.com
      <input type="radio" name="email" value="jang@eto.com">jang@eto.com
      <br/>
      <input type="submit" value="����">
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