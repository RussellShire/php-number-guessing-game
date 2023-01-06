<?php
function resetGame(){
    global $correct_guesses, $play_count;

    $_POST["counter"] = 0;
    $_POST["correct"] = 0;

    $play_count = 0;
    $correct_guesses = 0;

    return;
}
