<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$shops = $db->query(
    'SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id')->get();

    
view("backend/shop/index.view.php",compact('shops'));

}
else{
    abort(404);
}



