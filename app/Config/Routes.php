<?php

namespace Config;

use App\Models\Students;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/about','Home::about');

$routes->get('/pendaftaran','StudentsController::pendaftaran');

$routes->post('/pendafaran/create','StudentsController::store');
$routes->get('/students','StudentsController::index');


$routes->get('/admin','AdminController::index',['filter' => 'role:admin']);
$routes->get('/admin/mahasiswa','AdminController::students',['filter' => 'role:admin']);
$routes->post('/admin/mahasiswa/delete','AdminController::delete', ['filter' => 'role:admin']);
$routes->post('/admin/mahasiswa/view','AdminController::view', ['filter' => 'role:admin']);
$routes->get('/admin/mahasiswa/edit/(:num)','AdminController::edit/$1', ['filter' => 'role:admin']);
$routes->post('/admin/mahasiswa/update','AdminController::update', ['filter' => 'role:admin']);



/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
