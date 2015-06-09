<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(
    "src/LIG/Model/Address",
    "src/LIG/Model/Contact",
    "src/LIG/Model/Formation",
    "src/LIG/Model/Learning",
    "src/LIG/Model/Lesson",
    "src/LIG/Model/Prospect",
    "src/LIG/Model/User",
);
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'dec',
    'password' => 'dev',
    'dbname'   => 'dev',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

