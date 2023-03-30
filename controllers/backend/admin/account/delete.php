<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


$user=$db->query('select * from users where id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/account/delete.view.php",['user'=>$user]);
}
else{
    abort();
}


