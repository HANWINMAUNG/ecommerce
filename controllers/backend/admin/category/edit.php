<?php

use Core\App;

use Core\Database;

if(checkAuth()){

    $db = App::resolve(Database::class);


    $shops=$db->query('SELECT * FROM shops')->get();


    $category=$db->query('SELECT * FROM categories WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    //$shop=$db->query('SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id')->findOrFail();
     
   view("backend/category/edit.view.php" ,compact('shops','category'));
}
else{
    abort();
}



