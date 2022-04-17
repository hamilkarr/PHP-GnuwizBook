<?php
    header('content-type:text/html; charset=euc-kr');

    // class pen {
    //     public $color = '파란';

    //     function __construct($color) {
    //         echo "파라미터 color의 값: {$color}";
    //         echo "<br>";
    //         echo "프로퍼티 color의 값: {$this->color}";
    //         echo "<br>";
    //         $this->color = $color;
    //     }

    //     public function write($contents) {
    //         echo "{$this->color}색의 펜을 사용하여 ";
    //         echo "{$contents}를 쓰다.";
    //         echo "<br>";
    //     }
    // }

    // $pen = new pen('핑크');
    // $pen->write('글');

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