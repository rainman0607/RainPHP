<?php
/**
 * RainPHP
 *
 * @author Aske Merci <askemerci21@gmail.com>
 *
 * @description
 * Configuration file for the framework. Will probably be replaced by DotEnv sooner or later
 *
 */

use Zend\Diactoros\Response;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;
use Zend\Diactoros\ServerRequestFactory;

return [
    'request' => function () {
        return ServerRequestFactory::fromGlobals(
            $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
        );
    },

    'response' => new Response(),
    'emitter' => new SapiEmitter()
];