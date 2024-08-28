<?php

namespace Braingames\BrainGcd;

require_once(__DIR__ . '/../Engine.php');

use function Braingames\Engine\play;

$description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num ** 0.5; $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

$getroundData = function () {

    $question = rand(1, 100);

    $correctAnswer = isPrime($question) ? 'yes' : 'no';


    return [$question, $correctAnswer];
};

play($description, $getroundData);
