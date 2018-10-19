<?php
namespace BrainGames\Progression;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'What number is missing in this progression?';
const MEMBERSOFPROGRESSION = 10;

function progression()
{
    $progressionGame = function () {
        $firstNumber = rand(1, 100);
        $commonDifference = rand(1, 100);
        $arrayOfProgression = getArrayOfProgression($firstNumber, $commonDifference);
        $key = rand(0, MEMBERSOFPROGRESSION);
        $rightAnswer = $arrayOfProgression[$key];
        $arrayOfProgression[$key] = '..';
        $question = implode(' ', $arrayOfProgression);
        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $progressionGame);
}

function getArrayOfProgression($firstNumber, $commonDifference)
{
    for ($i = 1; $i <= MEMBERSOFPROGRESSION; $i++) {
        $arrayOfProgression[] = $firstNumber + $commonDifference * $i;
    }
    return $arrayOfProgression;
}
