<?php

use App\Models\Staff;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('staff', ['controller'=>'StaffController']);
$routes->post('staff/ubah/(:num)','staffController::update/$1');

// $routes->get('staff', 'StaffController::index');
// $routes->get('staff/(:num)', 'StaffController::show/$1');
// $routes->post('staff', 'StaffController::create');
// $routes->put('staff/(:num)', 'StaffController::update/$1');
// $routes->delete('staff/(:num)', 'StaffController::delete/$1');
