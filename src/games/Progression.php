<?php
namespace BrainGames\Progression;

use function \BrainGames\Engine\engine;

const DESCRIPTION = 'What number is missing in this progression?';
const MEMBERS_OF_PROGRESSION = 10;

function progression()
{
    $progressionGame = function () {
        $firstNumber = rand(1, 100);
        $commonDifference = rand(1, 100);
        $arrayOfProgression = getArrayOfProgression($firstNumber, $commonDifference);
        $hiddenElementPosition = rand(0, MEMBERS_OF_PROGRESSION);
        $rightAnswer = $arrayOfProgression[$hiddenElementPosition];
        $arrayOfProgression[$hiddenElementPosition] = '..';
        $question = implode(' ', $arrayOfProgression);
        return [$question, $rightAnswer];
    };

    engine(DESCRIPTION, $progressionGame);
}

function getArrayOfProgression($firstNumber, $commonDifference)
{
    for ($i = 1; $i <= MEMBERS_OF_PROGRESSION; $i++) {
        $arrayOfProgression[] = $firstNumber + $commonDifference * $i;
    }
    return $arrayOfProgression;
}
