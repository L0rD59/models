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
    'host' => getenv('MYSQL_PORT_3306_TCP_ADDR'),
    'user'     => 'root',
    'password' => getenv('MYSQL_ENV_MYSQL_ROOT_PASSWORD'),
    'dbname'   => 'models',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$configXML = Setup::createXMLMetadataConfiguration($pathsXML, $isDevMode);

$evm = new \Doctrine\Common\EventManager();

// tree
$treeListener = new \Gedmo\Tree\TreeListener();
//$treeListener->setAnnotationReader($cachedAnnotationReader);
$evm->addEventSubscriber($treeListener);


return $entityManager = EntityManager::create($dbParams, $configXML, $evm);

