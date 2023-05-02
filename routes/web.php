<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();


$routes->add('products', new Route(constant('URL_SUBFOLDER') . '/products', array('controller' => 'ProductController', 'method'=>'showProducts'), array()));
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showProduct'), array('id' => '[0-9]+')));

$routes->add('users', new Route(constant('URL_SUBFOLDER') . '/users', array('controller' => 'UserController', 'method'=>'listUsers'), array()));
$routes->add('user/create', new Route(constant('URL_SUBFOLDER') . '/user/create', array('controller' => 'UserController', 'method'=>'createUser'), array()));
$routes->add('user/delete', new Route(constant('URL_SUBFOLDER') . '/user/delete/{id}', array('controller' => 'UserController', 'method'=>'deleteUser'), array('id' => '[0-9]+')));