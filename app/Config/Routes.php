<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User::index');
$routes->get('admin', 'Admin::index');
$routes->get('/tambahmateri', 'Admin::tambahmateri');
$routes->get('/lihatmateri', 'Admin::lihatmateri');
$routes->get('/editmateri', 'Admin::editmateri');
$routes->get('/edituser', 'Admin::edituser');
$routes->get('/tambahuser', 'Admin::tambahuser');
$routes->get('/lihatuser', 'Admin::lihatuser');

$routes->get('/detail', 'User::detail');
$routes->get('/dashboard', 'User::dashboard');
$routes->get('/keranjang', 'User::keranjang');
$routes->get('/kelas', 'User::kelas');
$routes->get('/bayar', 'User::bayar');
$routes->get('kursus/(:segment)', 'User::detail/$1');

$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/register', 'Register::index');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
