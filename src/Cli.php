<?php
  use function \cli\line;

  $name = \cli\prompt('May I have your name?');
  line("Hello, %s!", $name);

