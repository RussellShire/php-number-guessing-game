<?php

function endScore(){
  global  $correct_guesses, $play_count;
  // $guess_high, $guess_low

  return round(($correct_guesses/$play_count)*100) . "%";

  // echo $guess_high >= $guess_low ? "You tended to guess high. \n" : "You tended to guess low. \n";
  // resetGame();
  // playAgain();
}
