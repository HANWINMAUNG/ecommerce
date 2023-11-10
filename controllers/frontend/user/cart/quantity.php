<?php

// dd($_POST);
// dd($_POST['quantity']);
$product_id=array_column($_SESSION['cart'],'product_id');

if(in_array($_POST['product_cart'],$product_id)){
// dd('h');
    if($_SESSION['cart'] [$_POST['product_cart']]['quantity']<$_POST['quantity']){

        $_SESSION['cart'] [$_POST['product_cart']]['quantity']+=1;

    
    }else if($_SESSION['cart'] [$_POST['product_cart']]['quantity']>$_POST['quantity']){

        $_SESSION['cart'] [$_POST['product_cart']]['quantity']-=1;
    }
}
redirectTo('cart');