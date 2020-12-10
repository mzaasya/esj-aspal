<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
//Routes Pages Controller-----------------------------------------------------------
$routes->get('/', 'Pages::index');
$routes->get('/proyek', 'Pages::proyek');
$routes->get('/paket', 'Pages::paket');
$routes->get('/kontak', 'Pages::kontak');
//Routes tentang kami
$routes->get('/tentang', 'Pages::tentang');
$routes->get('/tentangkami', 'Admin::tentangkami'); //tentang kami
//$routes->get('/login', 'Pages::login');
//Routes Admin Controller-----------------------------------------------------------
$routes->get('/admin', 'Admin::index'); //index admin
$routes->get('/datakontak', 'Admin::kontak'); //kontak
$routes->get('/profile', 'Admin::profile'); //profile
//Routes Paket----------------------------------------------------------------------
$routes->get('/datapaket', 'Admin::paket'); //index paket
$routes->get('/tambahpaket', 'Admin::tambahpaket'); //tambah paket
$routes->get('/ubahpaket/(:segment)', 'Admin::ubahpaket/$1'); //edit paket
$routes->get('/datapaket/hapus/(:segment)', 'Admin::hapuspaket/$1'); //hapus paket
//Routes Proyek---------------------------------------------------------------------
$routes->get('/dataproyek', 'Admin::proyek'); //index proyek
$routes->get('/tambahproyek', 'Admin::tambahproyek'); //tambah proyek
$routes->get('/ubahproyek/(:segment)', 'Admin::ubahproyek/$1'); //edit proyek
$routes->get('/dataproyek/hapus/(:segment)', 'Admin::hapusproyek/$1'); //hapus proyek

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
