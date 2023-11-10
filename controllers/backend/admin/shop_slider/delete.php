<?php

use Core\App;
use Core\Database;
if(checkAuth()){
$db = App::resolve(Database::class);


 $shop_slider=$db->query('SELECT * from shop_sliders where shop_id= :shop_id ', ['shop_id'=>$_GET['shop_id']])->findOrFail();

view("backend/shop_slider/delete.view.php",['shop_slider'=>$shop_slider]);
}
else{
    abort();
}

