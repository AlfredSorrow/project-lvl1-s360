<?php
namespace BrainGames\Even;

use function \BrainGames\Engine\engine;
use function \BrainGames\Cli\run;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function even()
{
    $name = run(DESCRIPTION);
    function isEven($number)
    {
        return $number % 2 === 0;
    }

    engine(
        $name,
        function () {

            $question = rand(1, 50);
            isEven($question) ? $rightAnswer = 'yes': $rightAnswer = 'no';
        
            return [$question, $rightAnswer];
        }
    );
}
