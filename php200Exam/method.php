<?php
    header('content-type:text/html; charset=euc-kr');

    class pen {
        public $color = '�Ķ�';
        public $bold;
        public $price;

        function __construct($color, $bold, $price) {
            echo "������� ��";
            echo "<br>";
            echo "��: {$color}"."<br>";
            echo "�β�: {$bold}"."<br>";
            echo "����: {$price}��";
        }

        public function write($content) {
            echo "{$content}�� ����.";
        }

        function __destruct() {
            echo "pen ��ü ����� �������ϴ�.";
        }
    }

    $pen = new pen('��ũ','�β���','10000');
    echo 'Hello World';
    $pen->write('��');