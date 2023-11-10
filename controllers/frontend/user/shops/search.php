<?php
use Core\App;

use Core\Database;


     $db = App::resolve(Database::class);

        $shop=$db->query('SELECT * From shops WHERE id=:id',[
            'id'=>$_GET['shop_id']
        ])->findOrFail();

       $shop_sliders=$db->query('SELECT * FROM shop_sliders WHERE shop_id=:id',['id' =>$_GET['shop_id']] )->get();

        $products =$db->query("SELECT * FROM products WHERE shop_id=:id and name LIKE :name",
        [
            'id'=>$_GET['shop_id'],
             'name' =>'%'. $_GET['search'].'%'])->get();

        view("frontend/shops/shops.view.php" ,compact('shop','shop_sliders','products'));

