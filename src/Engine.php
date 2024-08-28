<?php

namespace Braingames\Engine;

use function cli\line;
use function cli\prompt;

function play($description, $getRoundData)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($description);

    $isWin = true;

    for ($i = 0; $i < 3; $i += 1) {
        [$question, $correctAnswer] = $getRoundData();

        line("Question: %s", $question);

        $answer = prompt("Your answer");

        if ($answer === $correctAnswer) {
            line("Correct!");
        } else {
            $isWin = false;
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            break;
        }
    }

    if ($isWin) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
