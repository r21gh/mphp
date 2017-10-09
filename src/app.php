<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('hello', new Routing\Route('/hello/{name}', array('name'=>'world')));
$routes->add('bye', new Routing\Route('/bye'));

return $routes;