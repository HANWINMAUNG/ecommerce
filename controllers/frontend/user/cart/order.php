<?php


//  $product_id = array_column( $_SESSION['cart'],'product_id');
//  dd($_SESSION['cart']);
// dd(in_array($_POST['id'],$product_id));
use Core\App;

use Core\Database;


    $db = App::resolve(Database::class);

    $product_ids=array_column($_SESSION['cart'],'product_id');

    foreach($product_ids as $key => $product){

        $product_carts[$key] =$db->query('SELECT * FROM products WHERE id=:id',[

            'id'=>$product

        ])->find();

    }
    // dd($product_carts);
    

view("frontend/cart/order.view.php",compact('product_carts'));