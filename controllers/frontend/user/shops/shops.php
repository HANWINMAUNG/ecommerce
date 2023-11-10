<?php

use Core\App;
use Core\Database;

    $db = App::resolve(Database::class);

    $shop=$db->query('SELECT * From shops WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    $shop_sliders=$db->query('SELECT * FROM shop_sliders WHERE shop_id=:id',['id' =>$_GET['id']] )->get();

    
    $products= $db->query("SELECT * FROM products WHERE shop_id=:id",['id' =>$_GET['id']])->get();
    
    view("frontend/shops/shops.view.php" ,compact('shop','shop_sliders','products'));







