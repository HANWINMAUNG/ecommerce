<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


 $shop_slider=$db->query('select * from shop_sliders where id= :id ', ['id'=>$_GET['id']])->findOrFail();

view("backend/shop_slider/delete.view.php",['shop_slider'=>$shop_slider]);
}
else{
    abort();
}

