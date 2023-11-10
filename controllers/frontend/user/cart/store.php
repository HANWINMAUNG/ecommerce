<?php

//  unset($_SESSION['cart']);
// // dd($_POST);

 if (false !== checkCus()) {
    
   $product_id=array_column($_SESSION['cart'],'product_id');

   if(in_array($_POST['product_id'],$product_id)){

    $_SESSION['cart'] [$_POST['product_id']]['quantity']+= $_POST['quantity'];

   }else{
    $items=[
    'product_id'=>$_POST['product_id'],
    'quantity'=>$_POST['quantity']
    ];
    $_SESSION['cart'][$_POST['product_id']]=$items;
   }
   redirectTo('product?id='.$_POST['product_id']);

} elseif (false == checkCus()) {
    view("frontend/login.view.php") ;
} 
