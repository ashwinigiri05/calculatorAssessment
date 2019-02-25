<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;;

use ee\calculator\command\CalculatorCommand;


$application = new Application();
$application->add(new CalculatorCommand());

$application->run();
