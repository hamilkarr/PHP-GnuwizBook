<?php
include("./dbconn.php"); // DB������ ���� dbconn.php ������ ��Ŭ����մϴ�.

$mode = $_POST['mode'];
// �ƹ��� ��尡 ���ٸ� �ߴ�
switch ($mode) {
    case 'insert' :
        $mb_id = trim($_POST['mb_id']);
        $title = "ȸ������";
        break;
    case 'modify' :
        $mb_id = trim($_SESSION['ss_mb_id']);
        $title = "ȸ������";
        break;
    default:
        echo "<script>alert('mode ���� ����� �Ѿ���� �ʾҽ��ϴ�.');</script>";
        echo "<script>location.replace('./register.php');</script>";
        break;
}

if (!$_POST['mb_id']) {
    echo "<script>alert('���̵� �Ѿ���� �ʾҽ��ϴ�.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_password']) {
    echo "<script>alert('��й�ȣ�� �Ѿ���� �ʾҽ��ϴ�.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if ($_POST['mb_password'] != $_POST['mb_password_re']) {
    echo "<script>alert('��й�ȣ�� ��ġ���� �ʽ��ϴ�.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_name']) {
    echo "<script>alert('�̸��� �Ѿ���� �ʾҽ��ϴ�.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}

if (!$_POST['mb_email']) {
    echo "<script>alert('�̸����� �Ѿ���� �ʾҽ��ϴ�.');</script>";
    echo "<script>location.replace('./register.php');</script>";
    exit;
}
// POST�� �Ѿ�� �����͸� ����
$mb_password	= trim($_POST['mb_password']); // ù��° �Է� �н�����
$mb_password_re	= trim($_POST['mb_password_re']); // �ι�° �Է� �н�����
$mb_name		= trim($_POST['mb_name']); // �̸�
$mb_email		= trim($_POST['mb_email']); // �̸���
$mb_job			= $_POST['mb_job'] ?? ""; // ����
$mb_gender		= $_POST['mb_gender'] ?? ""; // ����
$mb_language	= isset($_POST['mb_language']) ? implode(",", $_POST['mb_language']) : ""; // ���ɾ�� (,) �������� ����
$mb_datetime	= date('Y-m-d H:i:s', time()); // ������
// �Է��� ��й�ȣ�� MySQL password() �Լ��� ����� ��ȣȭ�ؼ� ������
$sql = " SELECT PASSWORD('$mb_password') AS pass ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['pass'];

if($mode == "insert") { // �ű� ��� ���
    // ȸ�������� �õ��ϴ� ���̵� ������� ���̵����� Ȯ���ϴ� SQL ��
    $sql = " SELECT * FROM member WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
    // ���� ������� ���̵��� �˸�â�� ���� ȸ������ �������� �̵�
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('�̹� ������� ȸ�����̵� �Դϴ�.');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    $sql = " INSERT INTO member
				SET mb_id = '$mb_id',
					mb_password = '$mb_password',
					mb_name = '$mb_name',
					mb_email = '$mb_email',
					mb_job = '$mb_job',
					mb_gender = '$mb_gender',
					mb_language = '$mb_language',
					mb_datetime = '$mb_datetime' ";
    $result = mysqli_query($conn, $sql);

} else if ($mode == "modify") { // ȸ�� ���� ���

    $sql = " UPDATE member
				SET mb_password = '$mb_password',
					mb_email = '$mb_email',
					mb_job = '$mb_job',
					mb_gender = '$mb_gender',
					mb_language = '$mb_language'
			 WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
}

if ($result) { // ȸ������ �Ǵ� ȸ������ SQL ���� ���� ����Ǿ��ٸ�.
    echo "<script>alert('".$title."�� �Ϸ� �Ǿ����ϴ�.');</script>";
    echo "<script>location.replace('./member_list.php');</script>";
    exit;
} else {
    echo "���� ����: " . mysqli_error($conn);
    mysqli_close($conn); // �����ͺ��̽� ���� ����
}