<?php
    header('content-type:text/html; charset=euc-kr');

    // class pen {
    //     public $color = '�Ķ�';

    //     function __construct($color) {
    //         echo "�Ķ���� color�� ��: {$color}";
    //         echo "<br>";
    //         echo "������Ƽ color�� ��: {$this->color}";
    //         echo "<br>";
    //         $this->color = $color;
    //     }

    //     public function write($contents) {
    //         echo "{$this->color}���� ���� ����Ͽ� ";
    //         echo "{$contents}�� ����.";
    //         echo "<br>";
    //     }
    // }

    // $pen = new pen('��ũ');
    // $pen->write('��');

    // class a {
    //      function hello() {
    //         echo "hello world";
    //         echo "<br>";
    //     }
    // }

    // class b extends a{}

    // $b = new b();
    // $b->hello();


    class operation {
        function plus($num1, $num2) {
            $result = $num1 + $num2;
            return "{$num1} + {$num2} = ".$result;
        }
    }

    class load extends operation{}
    class load2 extends operation{}

    $load2 = new load2;
    echo $load2->plus(1,2);