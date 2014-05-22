<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\EventManager;
use Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/../../entities"), $isDevMode, null, null, false);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
require_once (__DIR__.'/../../config.php');
$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => $conOptions['Host'],
    'user'     => $conOptions['Username'],
    'password' => $conOptions['Password'],
    'dbname'   => $conOptions['Database'],
    'charset'  => 'UTF8',
);

$driverChain = new MappingDriverChain();
// load superclass metadata mapping only, into driver chain
// also registers Gedmo annotations.NOTE: you can personalize it
$annotationReader = $config->getMetadataDriverImpl()->getReader();
Gedmo\DoctrineExtensions::registerAbstractMappingIntoDriverChainORM($driverChain, $annotationReader);

$evm = new EventManager();
// loggable, not used in example
$loggableListener = new \Gedmo\Loggable\LoggableListener;
$loggableListener->setAnnotationReader($annotationReader);
$loggableListener->setUsername('admin');
$evm->addEventSubscriber($loggableListener);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config, $evm);