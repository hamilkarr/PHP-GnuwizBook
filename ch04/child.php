<?php
// header("Content-Type: text/html; charset=euc-kr");
include "parents.php";

class Child extends Parents {
  public function echoParents() : string {
    return $this->parents;
  }
}

$child = new Child();
echo $child->echoParents();