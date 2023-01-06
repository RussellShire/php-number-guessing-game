<html>
<body>
<?php

// include "play_again.php";
include "reset_game.php";
include "end_score.php";
include "game-loop.php";

$play_count = 0;
$correct_guesses = 0;
$guess = '';

// $guess_high = 0;
// $guess_low = 0;

$message = "I'm going to think of a number between 1 and 10.\n
Do you think you can guess what it is correctly?\n";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["counter"])) {
  $guess =  trim(htmlspecialchars($_POST["input"]));
  $guess = intval($guess);

  $play_count = trim(htmlspecialchars($_POST["counter"]));
  $play_count = intval($play_count);

  $correct_guesses = trim(htmlspecialchars($_POST["correct"]));
  $correct_guesses = intval($correct_guesses);

  guessNumber();
  endScore();
  
  if(isset($_POST['reset']) && $_POST['reset'] === true) {
    resetGame();
    $_POST['reset'] = false;
  }
}
?>

<h1>Guess the number</h1>
<form method="post">
  <label for="input">
    <?= $message ?>
  </label>
  <input name="input" type="number" value="<?= $guess ?>" />
  <input name="counter" type="hidden" value="<?= $play_count ?>" />
  <input name="correct" type="hidden" value="<?= $correct_guesses ?>" />
  <button type="submit">submit</button>
</form>

<?php if($play_count > 0) : ?>
  <p>You've played <?=$play_count?> times and had <?= $correct_guesses ?> correct guesses.</p>
  <p>That's <?= endScore(); ?></p>
<?php endif; ?>

<form method="post">
  <input type="hidden" name="reset" value=True />
  <button type="submit">Reset</button>
</form>

</body>
</html>
