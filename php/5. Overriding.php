<?php

Class Game {

  public $game = "GTA VI";

  public function play() {
    echo "GTA VI started!";
  }

}

Class Player extends Game {

  public $game = "Bully II";

  public function play() {
    echo "Bully II started!";
  }
  
}

$player1 = new Player();
echo $player1->game . "<br>"; // Output: Bully II (Overriding Game Class Variable)
$player1->play(); // Output: Bully II started! (Overriding Game Class Function)

?>
