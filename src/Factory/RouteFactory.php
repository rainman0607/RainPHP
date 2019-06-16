<?php


namespace App\Factory;


use DI\Container;
use League\Route\RouteCollection;
use App\Routes;

class RouteFactory
{
    public static function build(Container $container) : RouteCollection
    {
        $route = new RouteCollection($container);

        Routes::routes($route);
        return $route;
    }
}