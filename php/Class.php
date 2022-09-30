<?php

class Car {
  public $name, $price;
  function car(){
    echo $this->name . " car price is: " . $this->price;
  }
}

$car1 = new Car();
$car1->name = "Audi";
$car1->price = "$50,000";
$car1->car();

?> // Output: Audi car price is: $50,000
