<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once __DIR__.'/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();



return ConsoleRunner::createHelperSet($entityManager);


function GetEntityManager()
{
    $dbParams = array(
        'dbname' => 'dev',
        'user' => 'root',
        'password' => 'root',
        'host' => 'mysql',
        'driver' => 'pdo_mysql'
    );
    $isDevMode = true;

    $pathsXML = array(__DIR__ . "/Resources/doctrine");
    $config = \Doctrine\ORM\Tools\Setup::createXMLMetadataConfiguration($pathsXML, $isDevMode);
    return $entityManager = \Doctrine\ORM\EntityManager::create($dbParams, $config);



    $paths = array(
        __DIR__.'/src/LIG/Entity',
    );

    $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

    $resolveTargetEntityListener = new \Doctrine\ORM\Tools\ResolveTargetEntityListener();
    $resolveTargetEntityListener->addResolveTargetEntity('LIG\Model\Prospect\ProspectInterface', 'LIG\Entity\Prospect\Prospect', array());
    $resolveTargetEntityListener->addResolveTargetEntity('LIG\Model\Prospect\ContactOwnerInterface', 'LIG\Entity\Prospect\Prospect', array());
    $resolveTargetEntityListener->addResolveTargetEntity('LIG\Model\Prospect\ProspectOwnerInterface', 'LIG\Entity\User\UserSalesMan', array());

    $eventManager = new \Doctrine\Common\EventManager();
    $eventManager->addEventListener(\Doctrine\ORM\Events::loadClassMetadata, $resolveTargetEntityListener);

    $em = \Doctrine\ORM\EntityManager::create($dbParams, $config, $eventManager);

    return $em;
}