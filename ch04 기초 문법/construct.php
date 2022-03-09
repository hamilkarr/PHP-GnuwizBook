<?php
header("content-type: text/html; charset=euc-kr;");
// header('Content-Type: text/html; charset=euc-kr');

// class Example {
//   protected $name;

//   public function __construct() {
//     $this->name = "È«±æµ¿";
//     echo $this->name;
//   }
// }



class Example2 {
  public string $id;
  public string $name;
  public mixed $nickname;

  public function __construct( string $id, string $name, mixed $nickname) {
    $this->id = $id;
    $this->name = $name;
    $this->nickname = $nickname;
  }
}

$id = "hong";
$name = "È«±æµ¿";
$nickname = "ÄèµµÈ«±æµ¿222";

$example2 = new Example2(id: $id, name : $name, nickname : $nickname);