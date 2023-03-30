<?php


$router->get('/admin','controllers/backend/admin/index.php');


$router->get('/admin/accounts', 'controllers/backend/admin/account/index.php');

$router->get('/admin/accounts/create', 'controllers/backend/admin/account/create.php');

$router->post('/admin/accounts', 'controllers/backend/admin/account/store.php');

$router->post('/admin/login','controllers/backend/admin/login.php');

$router->get('/admin/logout','controllers/backend/admin/logout.php');

$router->get('/admin/accounts/delete', 'controllers/backend/admin/account/delete.php');

$router->delete('/admin/accounts/destroy', 'controllers/backend/admin/account/destroy.php');

$router->get('/admin/profile','controllers/backend/admin/profile/index.php');

$router->get('/admin/accounts/edit','controllers/backend/admin/account/edit.php');

$router->patch('/admin/accounts','controllers/backend/admin/account/update.php');


//shop

$router->get('/shop','controllers/backend/admin/shop/index.php');

$router->get('/shop/create','controllers/backend/admin/shop/create.php');

$router->post('/shop','controllers/backend/admin/shop/store.php');

$router->get('/shop/delete','controllers/backend/admin/shop/delete.php');

$router->delete('/shop/destroy','controllers/backend/admin/shop/destroy.php');

$router->get('/shop/edit','controllers/backend/admin/shop/edit.php');

$router->patch('/shop','controllers/backend/admin/shop/update.php');

//product
$router->get('/product','controllers/backend/admin/product/index.php');

$router->get('/product/create','controllers/backend/admin/product/create.php');

$router->post('/product','controllers/backend/admin/product/store.php');

$router->get('/product/delete','controllers/backend/admin/product/delete.php');

$router->delete('/product/destroy','controllers/backend/admin/product/destroy.php');

$router->get('/product/edit','controllers/backend/admin/product/edit.php');

$router->patch('/product','controllers/backend/admin/product/update.php');


//customers

$router->get('/customer','controllers/backend/admin/customer/index.php');

$router->get('/customer/create','controllers/backend/admin/customer/create.php');

$router->post('/customer','controllers/backend/admin/customer/store.php');

$router->get('/customer/delete','controllers/backend/admin/customer/delete.php');

$router->delete('/customer/destroy','controllers/backend/admin/customer/destroy.php');

$router->get('/customer/edit','controllers/backend/admin/customer/edit.php');

$router->patch('/customer','controllers/backend/admin/customer/update.php');

//shop_slider

$router->get('/shop_slider','controllers/backend/admin/shop_slider/index.php');

$router->get('/shop_slider/create','controllers/backend/admin/shop_slider/create.php');

$router->post('/shop_slider','controllers/backend/admin/shop_slider/store.php');

$router->get('/shop_slider/delete','controllers/backend/admin/shop_slider/delete.php');

$router->delete('/shop_slider/destroy','controllers/backend/admin/shop_slider/destroy.php');

$router->get('/shop_slider/edit','controllers/backend/admin/shop_slider/edit.php');

$router->patch('/shop_slider','controllers/backend/admin/shop_slider/update.php');

//discount

$router->get('/discount','controllers/backend/admin/discount/index.php');

$router->get('/discount/create','controllers/backend/admin/discount/create.php');

$router->post('/discount','controllers/backend/admin/discount/store.php');

$router->get('/discount/delete','controllers/backend/admin/discount/delete.php');

$router->delete('/discount/destroy','controllers/backend/admin/discount/destroy.php');

$router->get('/discount/edit','controllers/backend/admin/discount/edit.php');

$router->patch('/discount','controllers/backend/admin/discount/update.php');