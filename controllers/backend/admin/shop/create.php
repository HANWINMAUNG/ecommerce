<?php



 use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

if(checkAuth()){

$users=$db->query("select * from users where is_admin=:is_admin",[
  'is_admin'=>0])->get();


view("backend/shop/create.view.php",compact('users'));

}else
abort();