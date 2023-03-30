<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


$shop=$db->query('select * from shops where id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/shop/delete.view.php",['shop'=>$shop]);
}
else{
    abort();
}


