<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */


$routes->get('/', 'Home::index');
$routes->get('home(:hash)', 'Home::index');
$routes->get('/about(:hash)', 'Page::about');