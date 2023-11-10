<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


$category=$db->query('SELECT * FROM categories WHERE id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/category/delete.view.php",['category'=>$category]);
}
else{
    abort();
}


