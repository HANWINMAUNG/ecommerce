<?php

use Core\App;

use Core\Database;

if(checkAuth()){

    $db = App::resolve(Database::class);


    $partners=$db->query('SELECT * FROM users  WHERE is_admin=:is_admin',[
        'is_admin'=>0
    ])->get();


    $shop=$db->query('SELECT * From shops WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    //$shop=$db->query('SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id')->findOrFail();
     

    view("backend/shop/edit.view.php" ,compact('partners','shop'));
}
else{
    abort();
}



