<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$orders = $db->query(
    'SELECT orders.*, users.name AS user_name FROM orders LEFT JOIN users ON orders.user_id = users.id')->get();

   
view("backend/order/index.view.php",compact('orders'));

}
else{
    abort(404);
}



