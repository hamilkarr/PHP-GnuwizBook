<?php
    header("content-type:text/html; charset=euc-kr");

    $str = 'web development';
    $findStr = 'd';
    $pos = strpos($str,$findStr);
    echo "���ڿ� {$findStr}�� ��ġ��: ".$pos."<br>";

    // ������ ���� Ȯ���ϱ�

    if(isset($str2)) {
        echo "���� str�� �����մϴ�.";
    } else {
        echo "���� str�� �������� �ʽ��ϴ�.";
    }

    echo "<br>";
    $str2 = "string";

    if(isset($str2)) {
        echo "���� str�� �����մϴ�.";
        echo "<br><br>";
    } else {
        echo "���� str�� �������� �ʽ��ϴ�.";
        echo "<br>";
    }

    $val = "true";
    echo "���� var�� ��������: ".gettype($val)."<br>";

    settype($val,'bool');
    echo "���� var�� ��������: ".gettype($val)."<br>";
    var_dump($val);
    echo "<br><br>";

    $var2 = '';
    echo '���� �� ���ڿ��� ���';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = null;
    echo '���� null�� ��� ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = [];
    echo '���� �� �迭�� ��� ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = 0;
    echo '���� 0�� ��� ';
    var_dump(empty($var2));
    echo '<br>';

    $var2  ='0';
    echo '���� ���ڿ� 0�� ��� ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = 'string';
    echo '���� ���ڿ� string�� ��� ';
    var_dump(empty($var2));
    echo '<br>';
