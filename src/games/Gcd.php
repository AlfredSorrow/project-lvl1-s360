<?php
namespace BrainGames\Gcd;

use function \BrainGames\Engine\engine;

function getGcd($number1, $number2)
{
    if ($number2 === 0) {
        return abs($number1);
    } elseif ($number1 === 0) {
        return abs($number2);
    }
    return abs(getGcd($number2, $number1 % $number2));
}

function gcd($name)
{

    $number1 = rand(0, 100);
    $number2 = rand(0, 100);
    $rightAnswer = getGcd($number1, $number2);
    $question = "{$number1} {$number2}";

    $engineAnswer = engine($rightAnswer, $question, $name);
    if ($engineAnswer !==true && $engineAnswer !== false) {
        return;
    }
    gcd($name);
}