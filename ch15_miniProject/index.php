<?php
header('content-type:text/html; charset=euc-kr');
include("./dbconn.php"); ?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="euc-kr">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <h4 class="display-4 text-center">로그인</h4>
    <form action="./login_check.php" method="post">
      <div class="mb-3">
        <label for="mb_id">아이디</label>
        <input type="text" name="mb_id" id="mb_id" class="form-control">
      </div>
      <div class="mb-3">
        <label for="mb_password">비밀번호</label>
        <input type="password" id="mb_password" name="mb_password" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">로그인</button>
      <a href="./register.php" class="btn btn-secondary">회원가입</a>
    </form>
  </div>
</body>
</html>