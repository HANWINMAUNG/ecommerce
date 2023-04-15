<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$categories = $db->query(
    'SELECT categories.*, shops.name AS shop_name FROM categories LEFT JOIN shops ON categories.shop_id = shops.id')->get();

    
view("backend/category/index.view.php",compact('categories'));

}
else{
    abort(404);
}



