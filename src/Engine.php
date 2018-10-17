<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

function engine($rightAnswer, $questiom, $name)
{
    static $tries = 0;
    if ($tries >= 3) {
        return line("Congratulations, {$name}!");
    }

    line('Question: ' . $questiom);
    $userAnswer = \cli\prompt('Your answer');
    if (isUserRight($userAnswer, $rightAnswer)) {
        line("Correct! \n");
        $tries += 1;
        return true;
    } else {
        line(" \n'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
        line("Let's try again, {$name}! \n");
        $tries = 0;
        return false;
    }
}

function isUserRight($userAnswer, $rightAnswer)
{
    return $userAnswer === $rightAnswer;
}
