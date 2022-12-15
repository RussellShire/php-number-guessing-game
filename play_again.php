<?php

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
