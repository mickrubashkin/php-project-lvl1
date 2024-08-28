<?php

namespace Braingames\BrainGcd;

require_once(__DIR__ . '/../Engine.php');

use function Braingames\Engine\play;

$description = "Find the greatest common divisor of given numbers.";

$getroundData = function () {
    $num1 = rand(3, 20);
    $num2 = rand(5, 20);

    $question = "{$num1} {$num2}";

    $correctAnswer = 1;

    $i = min($num1, $num2);

    for ($i; $i > 0; $i -= 1) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $correctAnswer = $i;
            break;
        }
    }

    return [$question, (string)$correctAnswer];
};

play($description, $getroundData);
