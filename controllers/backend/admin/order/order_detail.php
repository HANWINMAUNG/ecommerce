<?php
// dd('HERE');
use Core\App;

use Core\Database;

if(checkAuth()){
    

$db = App::resolve(Database::class);

$order_detail = $db->query(
    'SELECT orders.*, users.name  user_name FROM orders LEFT JOIN users ON orders.user_id = users.id WHERE orders.id=:id', ['id'=>$_GET['id']])->find();

   

view("backend/order/order_detail.view.php",compact('order_detail'));

}
else{
    abort(404);
}



