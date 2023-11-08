<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'dashboard::index');
$routes->get('/pelanggan', 'pelanggan::index');
	
$routes->resource('api/kostpelanggan', ['controller' => 'KostPelangganController']);
