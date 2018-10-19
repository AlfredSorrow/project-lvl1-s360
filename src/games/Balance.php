<?php
namespace BrainGames\Balance;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function balance()
{
    $balanceGame = function () {
        $question = rand(1000, 10000);
        $arrayOfquestion = str_split($question);
        $summOfDigits = array_sum($arrayOfquestion);
        $quantityOfDigits = sizeOf($arrayOfquestion);
        $rightAnswerArray = getDigitsOfBalancedNumber($summOfDigits, $quantityOfDigits, $acc = []);
        $rightAnswer = implode($rightAnswerArray);
        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $balanceGame);
}

function getDigitsOfBalancedNumber($summOfDigits, $quantityOfDigits, $acc)
{
    if ($summOfDigits == 0) {
        return $acc;
    }
    $digit = floor($summOfDigits / $quantityOfDigits);
    $acc[] = $digit;
    $newSunnOfDigits = $summOfDigits - $digit;
    $newQuantityOfDigits = $quantityOfDigits - 1;
    return getDigitsOfBalancedNumber($newSunnOfDigits, $newQuantityOfDigits, $acc);
}
