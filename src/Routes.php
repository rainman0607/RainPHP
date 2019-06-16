<?php


namespace App;


use League\Route\RouteCollectionInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Routes
{
    public static function routes(RouteCollectionInterface $route) : RouteCollectionInterface
    {
        $route->get('/', function(ServerRequestInterface $request, ResponseInterface $response) {
            $response->getBody()->write('<h1>Welcome!</h1>');

            return $response;
        });

        return $route;
    }
}