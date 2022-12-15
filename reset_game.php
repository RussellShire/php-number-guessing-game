<?php

function resetGame(){
    global $guess_high, $guess_low, $correct_guesses, $play_count;
    
    $play_count = 0;
    $correct_guesses = 0;
    $guess_high = 0;
    $guess_low = 0;
  }
