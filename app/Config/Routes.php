<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('', 'Home::index');
$routes->get('/', 'User::index');
$routes->get('/about', 'User::about');
$routes->get('/contact', 'User::contact');
$routes->get('/blog', 'User::blog');
$routes->get('/service/cuciac', 'User::cuciac');
$routes->get('/service/bongkarac', 'User::bongkarac');
$routes->get('/service/serviceac', 'User::serviceac');
$routes->get('/post/artikel/(:segment)', 'Post::artikel/$1');
$routes->group('', ['filter' => 'role:user,admin'], function ($routes) {
    $routes->get('/booking', 'User::booking');
    $routes->get('/booking/save', 'User::savebooking');
    $routes->get('/usersprofile', 'Usersprofile::index');
    $routes->post('/usersprofile/simpan/(:num)', 'Usersprofile::simpan/$1');
    $routes->post('/usersprofile/imgsave/(:num)', 'Usersprofile::imgsave/$1');
    $routes->get('/activity', 'Activity::index');
    $routes->get('/activity/print/(:num)', 'Activity::print/$1');
    $routes->post('/activity/upstatus/(;num)', 'Activity::upstatus/$1');
});
$routes->group('', ['filter' => 'role:admin,teknisi'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
});
$routes->group('', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/teknisi', 'Teknisi::index');
    $routes->post('/teknisi/simpan', 'Teknisi::simpan');
    $routes->post('/teknisi/delete/(:num)', 'Teknisi::delete');
    $routes->get('/teknisi/update/(:num)', 'Teknisi::update');
    $routes->post('/teknisi/details/(:num)', 'Teknisi::details');
    $routes->get('/admin', 'Admin::index');
    $routes->post('/admin/simpan', 'Admin::simpan');
    $routes->post('/admin/delete/(:num)', 'Admin::delete');
    $routes->get('/admin/update/(:num)', 'Admin::update');
    $routes->post('/admin/details/(:num)', 'Admin::details');
    $routes->get('/users', 'Users::index');
    $routes->post('/user/delete/(:num)', 'Users::delete');
    $routes->get('/group', 'Group::index');
    $routes->post('/group/update/(:num)', 'Group::update/$1');
    $routes->get('/post', 'Post::index');
    $routes->get('/post/create', 'Post::create');
    $routes->post('/post/simpan', 'Post::simpan');
    $routes->post('/post/kategorikate', 'Post::kategorikate');
    $routes->post('/post/delete/(:num)', 'Post::delete');
    $routes->get('/post/edit/(:num)', 'Post::edit/$1');
    $routes->post('/post/update/(:num)', 'Post::update/$1');
    $routes->get('/profile', 'Profile::index');
    $routes->post('/profile/simpan/(:num)', 'Profile::simpan/$1');
    $routes->post('/profile/imgsave/(:num)', 'Profile::imgsave/$1');
    $routes->get('/sales/cuciac', 'Sales::cuciac');
    $routes->get('/sales/serviceac', 'Sales::serviceac');
    $routes->get('/sales/bongkarac', 'Sales::bongkarac');
    $routes->get('/sales/print/(:num)', 'Sales::print/$1');
    $routes->post('/sales/cucisave/(:num)', 'Sales::cucisave/$1');
    $routes->post('/sales/servicesave/(:num)', 'Sales::servicesave/$1');
    $routes->post('/sales/bongkarsave/(:num)', 'Sales::bongkarsave/$1');
});
$routes->group('', ['filter' => 'role:teknisi'], function ($routes) {
    $routes->get('/teknis/cuciac', 'Teknis::cuciac');
    $routes->get('/teknis/serviceac', 'Teknis::serviceac');
    $routes->get('/teknis/bongkarac', 'Teknis::bongkarac');
    $routes->post('/teknis/cucisave/(:num)', 'Teknis::cucisave/$1');
    $routes->post('/teknis/servicesave/(:num)', 'Teknis::servicesave/$1');
    $routes->post('/teknis/bongkarsave/(:num)', 'Teknis::bongkarsave/$1');
    $routes->post('/teknis/cucisaveyakin/(:num)', 'Teknis::cucisaveyakin/$1');
    $routes->post('/teknis/servicesaveyakin/(:num)', 'Teknis::servicesaveyakin/$1');
    $routes->post('/teknis/bongkarsaveyakin/(:num)', 'Teknis::bongkarsaveyakin/$1');
});
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
