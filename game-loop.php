<?php


function guessNumber(){
    global $guess, $message, $guess_high, $guess_low, $correct_guesses, $play_count;

    // $join = $_POST["counter"] > 1 ? "another" : "a";
    // $message = "\nOkay, I'm thinking of {$join} number, can you guess it?\n";

    if($guess > 10 || $guess <= 0){
        $message = ("That was an invalid guess, try again between 1-10: ");
        return;
    }

    $rand_number = rand(1,10);

    $play_count++;

    $result = $guess === $rand_number ? "correctly!" : "{$guess} incorrectly";

    if($guess === $rand_number){
        $correct_guesses++;
    } elseif($guess > $rand_number){
        $guess_high++;
    } else {
        $guess_low++;
    }
  
    $message = "In round {$_POST["counter"]} I was thinking of {$rand_number} and you guessed {$result} \n";

//   playAgain();
  
};
?>
