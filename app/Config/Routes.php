<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// TODO: 
// Pengurangan stok jika ada transaksi
// Tidak ada dalam option select jika produk tidak tersedia     

// $routes->get("/", function(){
//     return view('page/beranda/index');
// });
$routes->get("/transaksi", "TransaksiContoller::index");
$routes->post("/tes", "TransaksiContoller::create");
$routes->get("/tes/(:num)", "TransaksiContoller::edit/$1");
$routes->post("/tes/(:num)", "TransaksiContoller::update/$1");
$routes->get("/tes/(:num)/del", "TransaksiContoller::delete/$1");

$routes->post("/", "user::login_post");
$routes->get("/", "user::login_get");

$routes->get("/produk", "ProdukController::index");
$routes->get("/dashboard", "DashboardController::index");
$routes->get("/login", "User::login_get");

$routes->get("/register", "user::register_get");
$routes->post("/register", "user::register_post");

$routes->get("/logout", "User::logout");

