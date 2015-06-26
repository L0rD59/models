<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';
require_once 'DoctrineDataFixturesCommand.php';

$commands = array(
    new DoctrineDataFixturesCommand()

);

$helperSet = ConsoleRunner::createHelperSet($entityManager);
$helperSet->set(new \Symfony\Component\Console\Helper\DialogHelper());
return $helperSet;