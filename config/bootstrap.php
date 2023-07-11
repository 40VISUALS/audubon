<?php
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . "/../vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotation Mapping
$isDevMode = true;
$path = __DIR__."/../app/src/Mapping";
$config = Setup::createYAMLMetadataConfiguration(array($path), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);