<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'HomeController::index');
$routes->get('home', 'HomeController::index');
$routes->get('about', 'HomeController::about');
$routes->get('team', 'HomeController::team');
$routes->get('projects', 'HomeController::projects');
$routes->get('services', 'HomeController::services');
$routes->get('contact', 'HomeController::contact');
