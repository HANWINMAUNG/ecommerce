<?php

use Core\App;

use Core\Database;

if(checkAuth()){

    $db = App::resolve(Database::class);


    $owners=$db->query('SELECT * FROM shops')->get();


    $product=$db->query('SELECT * From products WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    //$shop=$db->query('SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id')->findOrFail();
     

    view("backend/product/edit.view.php" ,compact('owners','product'));
}
else{
    abort();
}



