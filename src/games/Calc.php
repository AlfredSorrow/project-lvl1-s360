<?php
namespace BrainGames\Calc;

use function \BrainGames\Engine\engine;
use function \BrainGames\Cli\run;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calc()
{
    $calcGame = function () {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $operator = OPERATORS[array_rand(OPERATORS)];
        switch ($operator) {
            case '+':
                $rightAnswer = $number1 + $number2;
                break;
            case '-':
                $rightAnswer = $number1 - $number2;
                break;
            case '*':
                $rightAnswer = $number1 * $number2;
                break;
        }
        $question = "{$number1} {$operator} {$number2}";

        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $calcGame);
}
