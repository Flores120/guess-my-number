<?php
    $guess = $_GET["user_guess"];
    $favorite_number = rand(1, 20);
    $message = checkGuess($guess, $favorite_number);

    function checkGuess($guess_number, $winning_number)
    {
      if ($guess_number == $winning_number) {
        return "You won, congrats ಠ_ಠ";
      }
      elseif ($guess_number < $winning_number) {
        return "Too low! Sorry try again ¯\_(ツ)_/¯";
      }
      else {
        return "Too high!!! Try again!! ¯\_(ツ)_/¯";
      }
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guesss My Number</title>
  </head>
  <body>
    <div class="container">
      <h1><?php echo $message; ?></h1>
      <h3><?php echo "You guessed" . " " . $guess; ?></h3>
      <h3><?php echo "The right answer was" . " " . $favorite_number; ?></h3>
    </div>
  </body>
</html>
