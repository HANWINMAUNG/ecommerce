<?php

 use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

if(checkAuth()){

$shops=$db->query("select * from shops")->get();

view("backend/category/create.view.php",compact('shops'));

}else
abort();