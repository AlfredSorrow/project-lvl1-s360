<?php
namespace BrainGames\calc;
use function \cli\line;
use function \cli\prompt;
use function \BrainGames\Engine\engine;

function operators()
{
    $operator = ['+', '-', '*'];
    return $operator[array_rand($operator)];
}

function calc($name)
{

    $number1 = rand(1, 20);
    $number2 = rand(1, 20);
    $operator = operators();
    if ($operator === '+') {
        $rightAnswer = $number1 + $number2;
    } elseif ($operator === '-') {
        $rightAnswer = $number1 - $number2;
    } else {
        $rightAnswer = $number1 * $number2;
    }
    $question = "{$number1} {$operator} {$number2}"; 

    $engineAnswer = engine($rightAnswer, $question, $name);
    if ($engineAnswer !==true && $engineAnswer !== false ) {
        return;
    }
    calc($name);
}