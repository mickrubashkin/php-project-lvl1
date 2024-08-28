<?php

namespace Braingames\BrainCalc;

require_once(__DIR__ . '/../Engine.php');

use function Braingames\Engine\play;

$description = "What number is missing in the progression?";

$getroundData = function () {
  $len = rand(5, 10);
  $start = rand(1, 20);
  $step = rand(1, 9);
  $hideIndex = rand(0, $len - 1);

  $progression = [];

  for ($i = 0; $i < $len; $i += 1) {
    $progression[] = $start;
    $start += $step;
  }

  $correctAnswer = $progression[$hideIndex];

  $progression[$hideIndex] = '..';

  $question = implode(' ', $progression);

  return [$question, (string)$correctAnswer];
};

play($description, $getroundData);
