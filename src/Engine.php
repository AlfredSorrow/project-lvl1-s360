<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const TRIES = 3;

function engine($gameDescription, callable $gameName)
{
    line('Welcome to the Brain Games!');
    line($gameDescripton . "\n");
    $name = prompt('May I have your name?');
    line("Hello, {$name}! \n");
    for ($i = 0; $i <= TRIES; $i++) {
        [$question, $rightAnswer] = $gameName();
        line('Question: ' . $question);
        $userAnswer = prompt('Your answer');
        if (isUserRight($userAnswer, $rightAnswer)) {
            line("Correct! \n");
        } else {
            line(" \n'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}! \n");
            return;
        }
    }
    line("Congratulations, {$name}!");
}

function isUserRight($userAnswer, $rightAnswer)
{
    return $userAnswer == $rightAnswer;
}
