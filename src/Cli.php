<?php
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line("Welcome to the Brain Games!\n");
    $name = \cli\prompt('May I have your name?');
    line("Hello, {$name}! \n");
}
