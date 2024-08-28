<?php

namespace Braingames\BrainEven;

require_once(__DIR__ . '/../Engine.php');

use function Braingames\Engine\play;

$description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

$getRoundData = function () {
  $question = rand(5, 99);
  $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';

  return [$question, $correctAnswer];
};

play($description, $getRoundData);
