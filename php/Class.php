<?php

class Car {

  public $name = "BMW",
  $price = "$75,000";

  function car(){
    echo $this->name . " car price is: " . $this->price . "<br>";
  }

}

$car2 = new Car();
$car2->car(); // Output: BMW car price is: $75,000

$car1 = new Car();
$car1->name = "Audi";
$car1->price = "$50,000";
$car1->car(); // Output: Audi car price is: $50,000

?>
