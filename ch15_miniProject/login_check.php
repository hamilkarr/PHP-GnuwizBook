<?php
header('content-type:text/html; charset=euc-kr');
include("./dbconn.php");

$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);

if (!$mb_id || !$mb_password) {
  echo "<script>alert('ȸ�����̵� �Ǵ� ��й�ȣ�� �Է��ϼ���.');</script>";
  echo "<script>location.replace('./index.php');</script>";
  exit;
}

// �ش� ���̵� �����ϴ��� üũ
$sql = "Select * from gnu_member Where mb_id = '$mb_id' ";
$result = mysqli_query($conn,$sql); // �������� ����ؼ� �����ͺ��̽����� ���̵� �˻�.
$mb = myslqi_fetch_assoc($result); // ��ȸ�� ȸ�� ������ ����� $mb������ ����.

// �Է��� ��й�ȣ�� MySQL_password()�Լ��� �̿��ؼ� ��ȣȭ �ؼ� ������.
$sql = "Select PASSWORD('$mb_password') as Pass "; // PASSWORD �ҹ��ڵ� �������� �õ��غ���.
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
echo $row."<br/>"; // sql password �Լ� �۵��ϴ��� ����غ�.
$password = $row['pass'];

if (!$mb['mb_id'] || !($password == $mb['mb_passworld'])) {
  echo "<script>alert('������ ���̵� �ƴϰų�, ��й�ȣ�� Ʋ���ϴ�.')</script>";
  echo "<script>location.replace('./index.php');</script>";
  exit;
}

$_SESSION['ss_mb_id'] = $mb_id;
mysqli_close($conn);

if(isset($_SESSION['ss_mb_id'])) {
  echo "<script>alert('�α��� �Ǿ����ϴ�.')</script>";
  echo "<script>location.replace('./member_list.php');</script>";
}