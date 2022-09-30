<?php

Class Money {

  public $cash;
  protected $creditCard;
  private $debitCard;

  public function __construct( $cash = 3000, $creditCard = 10000, $debitCard = 50000 ) {
    $this->cash = $cash;
    $this->creditCard = $creditCard;
    $this->debitCard = $debitCard;
  }

  public function moneyInCash() {
    echo "Total Money in Cash: $" . $this->cash . "<br>";
  }

  protected function moneyInCreditCard() {
    echo "Total Money in Credit Card: $" . $this->creditCard . "<br>";
  }

  private function moneyInDebitCard() {
    echo "Total Money in Debit Card: $" . $this->debitCard . "<br>";
  }

}

Class Loan extends Money {

  public function moneyInCash() {
    echo "Total Money in Cash: $" . $this->cash . "<br>";
  }

  public function moneyInCreditCard() {
    echo "Total Money in Credit Card: $" . $this->creditCard . "<br>";
  }

  public function moneyInDebitCard() {
    echo "Total Money in Debit Card: $" . $this->debitCard . "<br>";
  }

}

// You can get output by commenting and uncommenting certain code lines:

$money1 = new Money( 4000, 15000, 55000 );

$money1->moneyInCash(); // Output: Total Money in Cash: $4000 (public: $cash variable and moneyInCash() function)
$money1->moneyInCreditCard(); // Output: Error (protected: $creditCard variable and moneyInCreditCard() function)
$money1->moneyInDebitCard(); // Output: Error (private $debitCard variable and moneyInDebitCard() function)

$money2 = new Loan( 4000, 15000, 55000 );

$money2->moneyInCash(); // Output: Total Money in Cash: $4000 (public: $cash variable / public: moneyInCash() function)
$money2->moneyInCreditCard(); // Output: Total Money in Credit Card: $15000 (protected: $creditCard / public: moneyInCreditCard() function)
$money2->moneyInDebitCard(); // Output: Error (private: $debitCard / public: moneyInDebitCard() function)

$money2->debitCard = 30000; // Redefining undefined private $debitCard variable
$money2->moneyInDebitCard(); // Output: Total Money in Debit Card: $30000

?>
