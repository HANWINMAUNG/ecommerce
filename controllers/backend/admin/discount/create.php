<?php



 use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

if(checkAuth()){

$products=$db->query("select * from products")->get();

$shops=$db->query("select * from shops")->get();

view("backend/discount/create.view.php",compact('products','shops'));

}else

abort();