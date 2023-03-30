<?php

use Core\App;

use Core\Database;

if(checkAuth()){

    $db = App::resolve(Database::class);


    $shops=$db->query('SELECT * FROM shops')->get();


    $shop_slider=$db->query('SELECT * From shop_sliders WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    //$shop=$db->query('SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id')->findOrFail();
     

    view("backend/shop_slider/edit.view.php" ,compact('shops','shop_slider'));
}
else{
    abort();
}



