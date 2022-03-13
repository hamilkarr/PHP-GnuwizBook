<?php
  header('content-type:text/html; charset=euc-kr');
  include("./dbconn.php");

  if(isset($_SESSION['ss_mb_id'])) {
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = "Select * From gnu_member Where mb_id = '$mb_id' ";
    $result = mysqli_query($conn,$sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);

    $mode = "modify";
    $title = "ȸ������";
    $modify_mb_info = "readonly";
    $href = "./member_list.php";
  } else {
    $mode = "insert";
    $title = "ȸ������";
    $modify_mb_info = '';
    $href = "./index.php";
  }
?>
<html>
<head>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <h4 class="display-4 text-center"><?php echo $title ?></h4>
    <form action="./register_update.php" method="post">
      <input type="hidden" name="mode" value="<?php echo $mode ?>">
      <label for="mb_id">���̵�</label>
      <div class="mb-3">
        <input type="text" name="mb_id" id="mb_id" class="form-control"
        value="<?php echo $mb['mb_id'] ?? '' ?>" <?php echo $modify_mb_info ?>>
        <!-- �̺κ� ã�ƺ��� -->
        <!-- Null ���� ������. page 143 -->
      </div>
      <label for="mb_password">��й�ȣ</label>
      <div class="mb-3">
        <input type="password" name="mb_password" id="mb_password" class="form-control">
      </div>
      <label for="mb_password_re">��й�ȣ Ȯ��</label>
      <div class="mb-3">
        <input type="password" name="mb_password_re" id="mb_password_re" class="form-control">
      </div>
      <label for="mb_name">�̸�</label>
      <div class="mb-3">
        <input type="text" name="mb_name" id="mb_name" class="form-control" 
        value="<?php echo $mb['mb_name'] ?? '' ?>">
      </div>

      <label for="mb_email">�̸���</label>
      <div class="mb-3">
        <input type="email" name="mb_email" id="mb_email" class="form-control" value="<?php echo $mb['mb_email'] ?? '' ?>">
      </div>

      <label for="">����</label>
      <div class="mb-3">
        <select class="form-select" name="mb_job">
          <option value="">�����ϼ���</option>
          <option value="�л�" <?php echo ($mb['mb_job'] = "�л�") ? "selected" : ""; ?> >�л�</option>
          <option value="ȸ���" <?php echo ($mb['mb_job'] = "ȸ���") ? "selected" : ""; ?> >ȸ���</option>
          <option value="������" <?php echo ($mb['mb_job'] = "������") ? "selected" : ""; ?> >������</option>
          <option value="�ֺ�" <?php echo ($mb['mb_job'] = "�ֺ�") ? "selected" : ""; ?> >�ֺ�</option>
          <option value="����" <?php echo ($mb['mb_job'] = "����") ? "selected" : ""; ?> >����</option>
        </select>          
      </div>

      <label>����</label>
      <div class="mb-3">
        <div class="form-check form-check-inline">
          <input type="radio" name="mb_gender" id="gender1" value="����"
          <?php echo ($mb['mb_gender'] = "����") ? "checked" : "";?> class="form-check-input">
          <label for="gender1">����</label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" name="mb_gender" id="gender2" value="����"
          <?php echo ($mb['mb_gender'] = "����") ? "checked" : "";?> class="form-check-input">
          <label for="gender2">����</label>
        </div>
      </div>

      <label>���ɾ��</label>
      <div class="mb-3">
        <div class="form-check form-check-inline">
            <input type="checkbox"
                    id="mb_language1"
                    name="mb_language[]"
                    class="form-check-input"
                    value="HTML" <?php echo strpos($mb['mb_language'], "HTML") ? 'checked' : '' ?>>
            <label for="mb_language1">HTML</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox"
                    id="mb_language2"
                    name="mb_language[]"
                    class="form-check-input"
                    value="CSS" <?php echo strpos($mb['mb_language'], 'CSS') ? 'checked' : '' ?>>
            <label for="mb_language2">CSS</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox"
                    id="mb_language3"
                    name="mb_language[]"
                    class="form-check-input"
                    value="PHP" <?php echo strpos($mb['mb_language'], 'PHP') ? 'checked' : '' ?>>
            <label for="mb_language3">PHP</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox"
                    id="mb_language4"
                    name="mb_language[]"
                    class="form-check-input"
                    value="MySQL" <?php echo strpos($mb['mb_language'], 'MySQL') ? 'checked' : '' ?>>
            <label for="mb_language4">MySQL</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary"><?php echo $title ?></button>
      <a href="<?php echo $href ?>" class="btn btn-danger">���</a>
    </form>
  </div>

</body>
</html>