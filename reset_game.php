<?php

function resetGame(){
    global $correct_guesses, $play_count;
    // $guess_high, $guess_low, 

    $_POST["counter"] = 0;
    $_POST["correct"] = 0;

    $play_count = 0;
    $correct_guesses = 0;

    // $guess_high = 0;
    // $guess_low = 0;

    echo "reset game " . $_POST["counter"];
    return;
  }
