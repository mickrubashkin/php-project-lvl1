<?php

namespace Braingames\Cli;

use function cli\line;
use function cli\prompt;

line("Welcome to the Brain Games!");
$name = prompt("May I have your name?");
line("Hello, %s!", $name);
