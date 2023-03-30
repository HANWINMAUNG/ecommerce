<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$shop_sliders = $db->query(
    'SELECT shop_sliders.*, shops.name AS shop_name FROM shop_sliders LEFT JOIN shops ON shop_sliders.shop_id = shops.id')->get();

    
view("backend/shop_slider/index.view.php",compact('shop_sliders'));

}
else{
    abort(404);
}



