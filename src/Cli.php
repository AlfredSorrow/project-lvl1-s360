<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run($gameDescripton = '')
{
    line('Welcome to the Brain Games!');
    $gameDescripton === ''? line('') : line($gameDescripton . "\n");
    $name = \cli\prompt('May I have your name?');
    line("Hello, {$name}! \n");
    return $name;
}
