<?php
// $router->get('/','controllers/backend/admin/login.php');

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

$router->get('/admin/shop','controllers/backend/admin/shop/index.php');

$router->get('/admin/shop/create', 'controllers/backend/admin/shop/create.php');

$router->post('/admin/shop','controllers/backend/admin/shop/store.php');

$router->get('/admin/shop/delete','controllers/backend/admin/shop/delete.php');

$router->delete('/admin/shop/destroy','controllers/backend/admin/shop/destroy.php');

$router->get('/admin/shop/edit','controllers/backend/admin/shop/edit.php');

$router->patch('/admin/shop','controllers/backend/admin/shop/update.php');

//product
$router->get('/admin/product','controllers/backend/admin/product/index.php');

$router->get('/admin/product/create','controllers/backend/admin/product/create.php');

$router->post('/admin/product','controllers/backend/admin/product/store.php');

$router->get('/admin/product/delete','controllers/backend/admin/product/delete.php');

$router->delete('/admin/product/destroy','controllers/backend/admin/product/destroy.php');

$router->get('/admin/product/edit','controllers/backend/admin/product/edit.php');

$router->patch('/admin/product','controllers/backend/admin/product/update.php');


//customers

$router->get('/admin/customer','controllers/backend/admin/customer/index.php');

$router->get('/admin/customer/create','controllers/backend/admin/customer/create.php');

$router->post('/admin/customer','controllers/backend/admin/customer/store.php');

$router->get('/admin/customer/delete','controllers/backend/admin/customer/delete.php');

$router->delete('/admin/customer/destroy','controllers/backend/admin/customer/destroy.php');

$router->get('/admin/customer/edit','controllers/backend/admin/customer/edit.php');

$router->patch('/admin/customer','controllers/backend/admin/customer/update.php');

//shop_slider

$router->get('/admin/shop_slider','controllers/backend/admin/shop_slider/index.php');

$router->get('/admin/shop_slider/create','controllers/backend/admin/shop_slider/create.php');

$router->post('/admin/shop_slider','controllers/backend/admin/shop_slider/store.php');

$router->get('/admin/shop_slider/delete','controllers/backend/admin/shop_slider/delete.php');

$router->get('/admin/shop_slider/delete_detail','controllers/backend/admin/shop_slider/delete_detail.php');

$router->delete('/admin/shop_slider/destroy','controllers/backend/admin/shop_slider/destroy.php');

$router->get('/admin/shop_slider/edit','controllers/backend/admin/shop_slider/edit.php');

$router->patch('/admin/shop_slider','controllers/backend/admin/shop_slider/update.php');

//discount

$router->get('/admin/discount','controllers/backend/admin/discount/index.php');

$router->get('/admin/discount/create','controllers/backend/admin/discount/create.php');

$router->post('/admin/discount','controllers/backend/admin/discount/store.php');

$router->get('/admin/discount/delete','controllers/backend/admin/discount/delete.php');

$router->delete('/admin/discount/destroy','controllers/backend/admin/discount/destroy.php');

$router->get('/admin/discount/edit','controllers/backend/admin/discount/edit.php');

$router->patch('/admin/discount','controllers/backend/admin/discount/update.php');

//categories

$router->get('/admin/category','controllers/backend/admin/category/index.php');

$router->get('/admin/category/create','controllers/backend/admin/category/create.php');

$router->post('/admin/category','controllers/backend/admin/category/store.php');

$router->get('/admin/category/delete','controllers/backend/admin/category/delete.php');

$router->delete('/admin/category/destroy','controllers/backend/admin/category/destroy.php');

$router->get('/admin/category/edit','controllers/backend/admin/category/edit.php');

$router->patch('/admin/category','controllers/backend/admin/category/update.php');

//shippings

$router->get('/admin/shipping','controllers/backend/admin/shipping/index.php');

$router->get('/admin/shipping/create','controllers/backend/admin/shipping/create.php');

$router->post('/admin/shipping','controllers/backend/admin/shipping/store.php');

$router->get('/admin/shipping/delete','controllers/backend/admin/shipping/delete.php');

$router->delete('/admin/shipping/destroy','controllers/backend/admin/shipping/destroy.php');

$router->get('/admin/shipping/edit','controllers/backend/admin/shipping/edit.php');

$router->patch('/admin/shipping','controllers/backend/admin/shipping/update.php');

//orders
$router->get('/admin/order','controllers/backend/admin/order/index.php');

$router->get('/admin/order/order_detail','controllers/backend/admin/order/order_detail.php');

//frontend

$router->get('/login','controllers/frontend/user/login/login_index.php');

$router->post('/login','controllers/frontend/user/login/login.php');

$router->get('/logout','controllers/frontend/user/login/logout.php');

$router->get('/register','controllers/frontend/user/register/register.php');

$router->post('/register','controllers/frontend/user/register/store.php');

$router->get('/','controllers/frontend/user/index.php');

$router->get('/about','controllers/frontend/user/about.php');

$router->get('/shop','controllers/frontend/user/shop.php');

$router->get('/shops','controllers/frontend/user/shops/shops.php');

$router->get('/shops/search','controllers/frontend/user/shops/search.php');

$router->get('/contact','controllers/frontend/user/contact.php');

$router->get('/product','controllers/frontend/user/shops/product.php');

// cart
$router->post('/cart','controllers/frontend/user/cart/store.php');

$router->get('/cart','controllers/frontend/user/cart/index.php');

$router->get('/cart/delete','controllers/frontend/user/cart/delete.php');

$router->get('/cart/empty','controllers/frontend/user/cart/empty.php');

$router->get('/cart/edit','controllers/frontend/user/cart/delete.php');

$router->post('/cart/quantity','controllers/frontend/user/cart/quantity.php');

$router->get('/cart/order','controllers/frontend/user/cart/order.php');

$router->get('/cart/order_store','controllers/frontend/user/cart/order_store.php');

//profile
$router->get('/profile','controllers/frontend/user/profile/index.php');