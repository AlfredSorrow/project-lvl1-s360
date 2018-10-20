<?php
namespace BrainGames\Prime;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $primeGame = function () {
        $question = getNumber();
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $primeGame);
}

function isPrime($number)
{
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

// I decided to make the last game harder

function getNumber()
{
    $lastDigits = [1, 3, 7, 9];
    $number = rand(1, 1000);
    $number = "{$number}";
    $lastDigitOfNumber = $number[strlen($number) - 1];
    return in_array($lastDigitOfNumber, $lastDigits) ? $number : getNumber();
}
