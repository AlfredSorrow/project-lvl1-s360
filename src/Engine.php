<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const TRIES = 3;

function engine($name, callable $gameName)
{
    for ($i = 0; $i <= TRIES; $i++) {
        [$question, $rightAnswer] = $gameName();
        line('Question: ' . $question);
        $userAnswer = \cli\prompt('Your answer');
        if (isUserRight($userAnswer, $rightAnswer)) {
            line("Correct! \n");
        } else {
            line(" \n'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}! \n");
            $i = 0;
        }
    }
    return line("Congratulations, {$name}!");
}

function isUserRight($userAnswer, $rightAnswer)
{
    return $userAnswer == $rightAnswer;
}
