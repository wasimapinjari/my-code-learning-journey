<?php

class Girlfriend {

  public $name, $age;

  function __construct($name = "Hannah", $age = 21){
    $this->name = $name;
    $this->age = $age;
  }

  function intro(){
    echo "My cute girlfriend's name is " . $this->name . ". She is " . $this->age . " years old.<br>";
  }

}

$gf1 = new Girlfriend();
$gf1->intro(); // Output: My cute girlfriend's name is Hannah. She is 21 years old.

$gf2 = new Girlfriend();
$gf2->name = "Jennie";
$gf2->age = 22;
$gf2->intro(); // Output: My cute girlfriend's name is Jennie. She is 22 years old.

?>
