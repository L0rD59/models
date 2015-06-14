<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(
    __DIR__ . "/src/LIG/Model/Address",
    __DIR__ . "/src/LIG/Model/Contact",
    __DIR__ . "/src/LIG/Model/Formation",
    __DIR__ . "/src/LIG/Model/Learning",
    __DIR__ . "/src/LIG/Model/Lesson",
    __DIR__ . "/src/LIG/Model/Prospect",
    __DIR__ . "/src/LIG/Model/User",
);

$pathsXML = array(
    __DIR__ . "/Resources/doctrine/orm",
);

$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'dev',
    'password' => 'dev',
    'dbname'   => 'dev',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$configXML = Setup::createXMLMetadataConfiguration($pathsXML, $isDevMode);
$entityManager = EntityManager::create($dbParams, $configXML);

