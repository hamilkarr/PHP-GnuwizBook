<?php
header('content-type:text/html; charset=euc-kr');

$earth = array();

// earth�� nation �ε����� korea ����

$dr = array();

$dr['continent'] = array();
$dr['continent']['america'] = array();
$dr['continent']['america'][0] = '�ֳ�����';
$dr['continent']['america'][1] = '�÷���';

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = '�츮�߽�';
$dr['continent']['asia'][1] = 'ȫ��';
$dr['continent']['asia'][2] = '������';

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = '�ĸ�';

echo "���� ������ ��������?";
echo "<br><br>";
echo "�Ƹ޸�ī: <br>";
echo $dr['continent']['america'][0]."<br>";
echo $dr['continent']['america'][1]."<br>";
echo "<br>";

echo "�ƽþ�: <br>";
echo $dr['continent']['asia'][0]."<br>";
echo $dr['continent']['asia'][1]."<br>";
echo $dr['continent']['asia'][2]."<br>";
echo "<br>";

echo "����: <br>";
echo $dr['continent']['europe'][0]."<br>";

echo "===========================<br>";
$num = 12;
echo "\$num�� ��������(�� {$num})�� ".gettype($num);
echo "<br>";

$greeting = "�ȳ�";
echo "\$greetiong�� �������� (�� {$greeting})�� ".gettype($greeting)."<br>";

$numStr = "121212";
echo "\$numStr�� �������� (�� {$numStr})�� ".gettype($numStr)."<br>";

$fruit = array();
echo "\$fruit�� �������� (�� {$fruit})�� ".gettype($fruit)."<br>";

$nai = null;
echo "\$nai�� ��������(�� {$nai})��".gettype($nai)."<br>";

$boolean = true;
echo "\$boolean�� �������� (�� {$boolean})��".gettype($boolean)."<br>";