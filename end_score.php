<?php

function endScore(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;

  $correct_percent = round(($correct_guesses/$play_count)*100) . "%";
  

  echo "You've played {$play_count} times and had {$correct_guesses} correct guesses. \n";
  echo "That's {$correct_percent}\n";
  // echo $guess_high >= $guess_low ? "You tended to guess high. \n" : "You tended to guess low. \n";
  // resetGame();
  // playAgain();
}
