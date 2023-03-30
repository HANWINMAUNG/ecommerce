<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


$product=$db->query('select * from products where id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/product/delete.view.php",['product'=>$product]);
}
else{
    abort();
}


