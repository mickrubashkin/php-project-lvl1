<?php

namespace Braingames\BrainCalc;

require_once(__DIR__ . '/../Engine.php');

use function Braingames\Engine\play;

$description = "What is the result of the expression?";

$getroundData = function () {
    $a = rand(1, 20);
    $b = rand(1, 20);
    $operator = ['+', '-', '*'][rand(0, 2)];

    $question = "{$a} {$operator} {$b}";

    $correctAnswer = null;

    switch ($operator) {
        case '+':
            $correctAnswer = $a + $b;
            break;
        case '-':
            $correctAnswer = $a - $b;
            break;
        case '*':
            $correctAnswer = $a * $b;
            break;
    }

    return [$question, (string)$correctAnswer];
};

play($description, $getroundData);
