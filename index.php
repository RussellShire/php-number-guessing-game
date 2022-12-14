<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of a number between 1 and 10.\n
Do you think you can guess what it is correctly?\n";

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count++ ;

  $rand_number = rand(1,10);

  $join = $play_count > 1 ? "another" : "a";

  echo "\nOkay, I'm thinking of ${join} number, can you guess it?\n";
  $guess = readline(">> ");
  $guess = intval($guess);

  if($guess > 10 || $guess <= 0){
    $guess = readline("That was an invalid guess, try again between 1-10: ");
    $guess = intval($guess);
  }

  $result = $guess === $rand_number ? "correctly" : "${guess} incorrectly";

  if($guess === $rand_number){
    $correct_guesses++;
  } elseif($guess > $rand_number){
    $guess_high++;
  } else {
    $guess_low++;
  }
  
  echo "In round ${play_count} the number was ${rand_number} and you guessed ${result} \n";

  playAgain();
  
};

function playAgain(){
  global $play_count;

  $play_again = readline("\nPlay again? (Y/N):");

  if(strtolower($play_again) !== "y" && strtolower($play_again) !== "n"){
    $play_again = readline("\nInvalid input, play again? (Y/N):");
  }

  $play_again = strtolower($play_again) === 'y'? TRUE : FALSE;

  if($play_again){
    guessNumber();
  } elseif ($play_count === 0) {
    return;
  } else {
    endScore();
  }
}

function resetGame(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  
  $play_count = 0;
  $correct_guesses = 0;
  $guess_high = 0;
  $guess_low = 0;
}

function endScore(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;

  $correct_percent = round(($correct_guesses/$play_count)*100) . "%";

  echo "You played ${play_count} times and had ${correct_guesses} correct guesses. \n";
  echo "That's ${correct_percent}\n";
  echo $guess_high >= $guess_low ? "You tended to guess high. \n" : "You tended to guess low. \n";
  resetGame();
  playAgain();
}

guessNumber();
