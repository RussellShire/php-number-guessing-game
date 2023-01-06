<?php

function endScore(){
  global  $correct_guesses, $play_count;
  return round(($correct_guesses/$play_count)*100) . "%";
}
