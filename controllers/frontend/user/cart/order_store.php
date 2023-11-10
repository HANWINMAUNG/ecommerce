<?php

//dd($product_id = array_column( $_SESSION['cart'],'product_id'));
 // dd($_SESSION['cart']['product_id']);
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
    // dd($product_ids[0]);
    // dd($product_carts);
   // dd(getAuthCus()['id']);
   foreach($product_carts as $product_cart){
    foreach($_SESSION['cart'] as $cart){
        if($product_cart['id'] == $cart['product_id']){
        $order_detail=["product_id"=> $cart['product_id'],
                             "quantity"=>$cart['quantity'],
                             "product_name"=>$product_cart['name'],
                             "shop_id"=>$product_cart['shop_id'],
                             "price"=>$product_cart['price']];
        }
    }
    $order_details[]=$order_detail;
   }
    
   
    foreach($product_carts as $product_cart){
        $total += $_SESSION['cart'][ $product_cart['id']]['quantity']*$product_cart['price'];
    }

    // dd($product_carts);

    $db->query(
        "INSERT INTO orders(order_no,delivery_fee,order_detail,total,shop_id,user_id,created_at,updated_at)
        VALUES (:order_no,:delivery_fee,:order_detail,:total,:shop_id,:user_id,:created_at,:updated_at)",
        [
            'order_no' =>  rand(1,100),
            'delivery_fee' =>rand(200,400),
            'order_detail' => json_encode($order_details),
            'total' =>intval($total),
            'shop_id'=>intval($product_carts[0]['shop_id']),
            'user_id' =>intval(getAuthCus()['id']),
            'created_at'=>date('Y-m-d H-i-s'),
            'updated_at'=>date('Y-m-d H-i-s')
        ]
    );
    unset($_SESSION['cart']);
redirectTo('');