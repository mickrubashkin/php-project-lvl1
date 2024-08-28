<?php

namespace Braingames\BrainEven;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);

line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

$numbers = [15, 6, 7];
$isWin = true;

foreach ($numbers as $number) {
  line("Question: %s", $number);
  $answer = prompt("Your answer");
  $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

  if ($answer === $correctAnswer) {
    line("Correct!");
  } else {
    $isWin = false;
    line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
    break;
  }
}

if ($isWin) {
  line("Congratulation, %s!", $name);
} else {
  line("Let's try again, %s!", $name);
}
