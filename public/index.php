<?php
/**
 * RainPHP
 *
 * @author Aske Merci <askemerci21@gmail.com>
 *
 * @description
 * Example file for
 */

use DI\ContainerBuilder;


/**
 * Register Composer's Autoload
 */

require __DIR__.'/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/../config.php');
$container = $containerBuilder->build();