#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Command\CreateMappingCommand;

$application = new Application('My Command', 'v1.0.0');

// ... register commands
$application->add(new CreateMappingCommand());

$application->run();
