<?php
namespace BrainGames\Gcd;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';


function gcd()
{
    function getGcd($number1, $number2)
    {
        return ($number2 === 0) ? abs($number1) : abs(getGcd($number2, $number1 % $number2));
    }

    $gcdGame = function () {
        $number1 = rand(0, 100);
        $number2 = rand(0, 100);
        $rightAnswer = getGcd($number1, $number2);
        $question = "{$number1} {$number2}";

        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $gcdGame);
}
