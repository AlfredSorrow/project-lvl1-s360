<?php
namespace BrainGames\Even;

use function \BrainGames\Engine\engine;

function isEven($number)
{
    return $number % 2 === 0;
}

function even($name)
{

    $number = rand(5, 45);
    if (isEven($number)) {
        $rightAnswer = 'yes';
    } else {
        $rightAnswer = 'no';
    }

    $engineAnswer = engine($rightAnswer, $number, $name);
    if ($engineAnswer !==true && $engineAnswer !== false) {
        return;
    }
    even($name);
}
