<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UsahaController::index');                     // Menampilkan daftar usaha
$routes->get('usaha/create', 'UsahaController::create');        // Menampilkan form tambah usaha
$routes->post('usaha/store', 'UsahaController::store');         // Menyimpan data usaha
$routes->get('usaha/edit/(:num)', 'UsahaController::edit/$1');  // Menampilkan form edit usaha
$routes->post('usaha/update/(:num)', 'UsahaController::update/$1'); // Menyimpan perubahan data usaha
$routes->get('usaha/delete/(:num)', 'UsahaController::delete/$1'); // Menghapus usaha

    