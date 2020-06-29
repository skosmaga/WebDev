<?php
require_once "animal.php";

class frog extends animal{
  public function jump(){
    echo "hop hop <br>";
  }
  public function get_legs(){
    $this->legs=4;
    return $this->legs;
  }
}

?>
