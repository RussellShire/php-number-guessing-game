# NUMBER GUESSING GAME

A PHP project where users try to guess a randomly generated number and receive feedback on how successful they were.
Originally written for the terminal in December 2022 but refactored for browser in January 2023.

<!-- #Hosted
https://russellshire.github.io/php-number-guessing-game/ -->

# Project specifications

- User is welcomed, a number is randomly generated and they are invited to guess it
- Invalid inputs should be handled
- Number of plays, Correct guesses are saved
- Users can immediately play again
- Users automatically recieve feedback on their performance: rounds played, correct guesses and percentage of correct
- Users can Reset the game, resetting rounds played, correct guesses and percentage of correct answers

# Optional To-Do:

~~- Currently running in terminal, rewrite for browser~~

- Add CSS styling
- Ensure layout is mobile optimised
- Add a 'celebration' animation for correct guesses to make it more of an event
- Customise responses depending on incorrect responses ie. 'oof, that was close', or 'you were miles off!'
- Whether guesses are high or low should be saved
- Handle if the number of high guesses is the same as the number of low guesses
- Give hints, ie. 'it's higher than your last guess' to add an element of skill

# Usage

Tested and working on PHP 8.2.0 January 2023

### Run

php index.php
