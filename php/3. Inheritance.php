<?php

class Son {

  public $pocketMoney, $expense;
  
  function __construct( $pocketMoney = 4000, $expense = 1200 ) {
    $this->pocketMoney = $pocketMoney;
    $this->expense = $expense;
  }

  function moneyLeft() {
    echo "Total Money Left: $" . $this->pocketMoney - $this->expense . "<br>";
  }

}

class Father extends Son {

  public $salary = 50000, $houseExpense = 25320;

  function moneyLeft() {
    echo "Total Money Left: $" . $this->salary - ( $this->pocketMoney + $this->houseExpense ) . "<br>";
  }

}

$s1 = new Son( 5000, 1200 );
$s1->moneyLeft(); // Output: Total Money Left: $3800

$f1 = new Father( 5000, 1200 );
$f1->moneyLeft(); // Output: Total Money Left: $19680

?>
