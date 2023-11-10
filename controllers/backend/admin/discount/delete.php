<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


 $discount=$db->query('SELECT * FROM discounts WHERE id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/discount/delete.view.php",['discount'=>$discount]);
}
else{
    abort();
}

