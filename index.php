<html>
<body>
<?php

include "play_again.php";
include "end_score.php";
include "reset_game.php";
include "game-loop.php";

$play_count = 1;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
$guess = '';
// $error_message = '';

$message = "I'm going to think of a number between 1 and 10.\n
Do you think you can guess what it is correctly?\n";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $guess =  trim(htmlspecialchars($_POST["input"]));
  $guess = intval($guess);

  $play_count = trim(htmlspecialchars($_POST["counter"]));

  guessNumber();
}

?>


<h1>Guess the number</h1>
<form method="post">
  <label for="input">
    <?= $message ?>
  </label>
  <input name="input" type="number" value="<?= $guess ?>" />
  <input name="counter" type="hidden" value="<?= $play_count ?>" />
  <button type="submit">submit</button>
</form>
<!-- <p><?= $guess ?></p>
<p><?= gettype($guess) ?></p> -->

</body>
</html>