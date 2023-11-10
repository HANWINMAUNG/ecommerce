<?php

use Core\App;

use Core\Database;

use Core\Validator;

require base_path('Core/Validator.php');
 
$db = App::resolve(Database::class);
//dd($_POST);
$errors =[];


if(empty($errors)){
    
    // dd($_POST);
    $db->query("INSERT INTO discounts(discount_type,amount,product_id,shop_id,created_at,updated_at) VALUES
                      (:discount_type,:amount,:product_id,:shop_id,:created_at,:updated_at)",[
        'discount_type' => $_POST['discount_type'],
        'amount'=>$_POST['amount'],
        'product_id'=>$_POST['product_id'],
        'shop_id'=>$_POST['shop_id'],
        'created_at'=>date('Y-m-d H-i-s'),
        'updated_at'=>date('Y-m-d H-i-s')
        
    ]); 
    with('success','An account is successfully created!');
   redirectTo('admin/discount');
}else{
    withError($errors);
    redirectTo('admin/discount/create');
}
?>

