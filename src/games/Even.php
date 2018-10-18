<?php
namespace BrainGames\Even;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';
function isEven($number)
{
    return $number % 2 === 0;
}

function even()
{
    $evenGame = function () {

        $question = rand(1, 50);
        isEven($question) ? $rightAnswer = 'yes': $rightAnswer = 'no';
    
        return [$question, $rightAnswer];
    };
    engine(DESCRIPTION, $evenGame);
}
