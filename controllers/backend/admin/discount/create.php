<?php



 use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

if(checkAuth()){

$products=$db->query("select * from products")->get();

view("backend/discount/create.view.php",compact('products'));

}else
abort();