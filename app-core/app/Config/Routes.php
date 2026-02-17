<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('fitur', 'Home::fitur');
$routes->get('kebaikan', 'Home::kebaikan');
$routes->get('tentang', 'Home::tentang');
$routes->get('laporan', 'Home::laporan');
$routes->get('bantuan', 'Home::panduan');
$routes->get('kontak', 'Home::kontak');
$routes->get('privacy-policy', 'Home::privacy');
$routes->get('term', 'Home::term');
$routes->get('/login', 'Home::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Home::register');
$routes->get('/logout', 'Auth::logout');
$routes->post('/register/masjid', 'Auth::registerMasjid');
$routes->post('/register/jamaah', 'Auth::registerJamaah');
$routes->get('dashboard', 'Admin::index');
$routes->get('dashboard/profil', 'Admin::profil');
$routes->post('dashboard/profil', 'Admin::updateProfile');
$routes->get('dashboard/regencies/(:num)', 'Admin::getRegencies/$1');
$routes->get('dashboard/users/search', 'Admin::searchUsers');
$routes->post('dashboard/pengurus/add', 'Admin::addPengurus');
$routes->post('dashboard/pengurus/update', 'Admin::updatePengurus');
$routes->post('dashboard/pengurus/delete', 'Admin::deletePengurus');
$routes->post('dashboard/gallery/upload', 'Admin::uploadGallery');
$routes->post('dashboard/gallery/delete', 'Admin::deleteGallery');
$routes->get('dashboard/program', 'Admin::program');
$routes->get('dashboard/berita', 'Admin::berita');
$routes->get('dashboard/berita/create', 'Admin::createBerita');
$routes->get('dashboard/berita/edit/(:num)', 'Admin::editBerita/$1');
$routes->post('dashboard/berita/save', 'Admin::saveBerita');
$routes->post('dashboard/berita/delete', 'Admin::deleteBerita');
$routes->post('dashboard/berita/category/save', 'Admin::saveNewsCategory');
$routes->post('dashboard/berita/category/delete', 'Admin::deleteNewsCategory');
$routes->get('dashboard/program', 'Admin::program');
$routes->get('dashboard/program/create', 'Admin::createProgram');
$routes->get('dashboard/program/edit/(:num)', 'Admin::editProgram/$1');
$routes->post('dashboard/program/save', 'Admin::saveProgram');
$routes->get('dashboard/program/delete/(:num)', 'Admin::deleteProgram/$1');
$routes->post('dashboard/program/category/save', 'Admin::saveProgramCategory');
$routes->post('dashboard/program/category/delete', 'Admin::deleteProgramCategory');

$routes->get('dashboard/keuangan', 'Admin::keuangan');
$routes->post('dashboard/keuangan/save', 'Admin::saveFinanceTransaction');
$routes->post('dashboard/keuangan/delete', 'Admin::deleteFinanceTransaction');
$routes->post('dashboard/keuangan/category/save', 'Admin::saveFinanceCategory');
$routes->post('dashboard/keuangan/category/delete', 'Admin::deleteFinanceCategory');

$routes->get('dashboard/warga', 'Admin::warga');
$routes->get('dashboard/warga/new', 'Admin::createWarga');
$routes->get('dashboard/warga/edit/(:num)', 'Admin::editWarga/$1');
$routes->post('dashboard/warga/save', 'Admin::saveWarga');
$routes->get('dashboard/warga/delete/(:num)', 'Admin::deleteWarga/$1');

// Public Profile (Catch-all)
$routes->get('(:any)/berita', 'Home::newsList/$1');
$routes->get('(:any)/berita/(:any)', 'Home::newsDetail/$1/$2');
$routes->get('(:any)/program', 'Home::programList/$1');
$routes->get('(:any)/program/(:any)', 'Home::programDetail/$1/$2');
$routes->get('(:any)', 'Home::masjid/$1');
