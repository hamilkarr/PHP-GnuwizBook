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
    <h1>Select Example</h1>
    <form action="./post_result.php" method="post">
      �̸� :
      <select name="name" id="">
        <option value="">�����ϼ���</option>
        <option value="ȫ�浿">ȫ�浿</option>
        <option value="�Ӳ���">�Ӳ���</option>
        <option value="����">����</option>
      </select>
      <br/>

      ���̵�: 
      <select name="id" id="">
        <option value="">�����ϼ���</option>
        <option value="hong">hong</option>
        <option value="im">im</option>
        <option value="jang">jang</option>
      </select>
      <br/>

      �̸���: 
      <select name="email" id="">
        <option value="">�����ϼ���</option>
        <option value="hong@eto.com">hong@eto.com</option>
        <option value="jang@eto.com">jang@eto.com</option>
        <option value="im@eto.com">im@eto.com</option>
      </select>
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