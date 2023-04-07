<?php

use Core\App;

use Core\Database;

if(checkAuth()){

    $db = App::resolve(Database::class);

    
  $discount= $db->query(
        'SELECT discounts.*, products.name AS product_name,shops.name AS shop_name FROM discounts
         LEFT JOIN products ON discounts.product_id = products.id 
        LEFT JOIN shops ON discounts.shop_id = shops.id WHERE discounts.id=:id',['id' =>$_GET['id']])->findOrFail();

    view("backend/discount/edit.view.php" ,compact('discount')) ;
}
else{
    abort();
}



