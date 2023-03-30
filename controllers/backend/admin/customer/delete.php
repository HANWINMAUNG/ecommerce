<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


$customer=$db->query('select * from customers where id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/customer/delete.view.php",['customer'=>$customer]);
}
else{
    abort();
}


