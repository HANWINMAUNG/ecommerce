<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$products = $db->query(
    'SELECT products.*, shops.name AS shop_name FROM products LEFT JOIN shops ON products.shop_id = shops.id')->get();

    
view("backend/product/index.view.php",compact('products'));

}
else{
    abort(404);
}



