<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$routes->resource('post');
// Load the system's routing file first
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Page');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // Ubah ke false untuk keamanan

// Route untuk halaman utama
$routes->get('/', 'Page::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

// Route untuk artikel publik
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

// Route untuk kategori
$routes->get('/kategori/(:segment)', 'Artikel::kategori/$1');

// Routes untuk AJAX
$routes->get('/ajax', 'AjaxController::index');
$routes->get('/ajax/getData', 'AjaxController::getData');
$routes->get('/ajax/getById/(:num)', 'AjaxController::getById/$1');
$routes->post('/ajax/save', 'AjaxController::save');
$routes->delete('/ajax/delete/(:num)', 'AjaxController::delete/$1');

// Route untuk user
$routes->match(['get', 'post'], 'user/register', 'User::register');
$routes->get('/user/login', 'User::login');
$routes->post('/user/login', 'User::login');
$routes->get('/user/logout', 'User::logout');


// Route untuk admin dengan filter auth
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'User::dashboard');
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->get('artikel/add', 'Artikel::add');
    $routes->post('artikel/add', 'Artikel::add');
    $routes->get('artikel/edit/(:num)', 'Artikel::edit/$1');
    $routes->post('artikel/edit/(:num)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:num)', 'Artikel::delete/$1');
});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}