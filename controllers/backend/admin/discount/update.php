<?php

use Core\App;
use Core\Database;

if (checkAuth()) {
    $errors = [];

    $db = App::resolve(Database::class);

  
    if (empty($errors)) {
    
    
            $db->query(
                "UPDATE  discounts SET 
                 shop_id=:shop_id, product_id=:product_id, discount_type=:discount_type,amount=:amount,updated_at=:updated_at WHERE id=:id",
                [
                    'id' => $_POST['id'],
                    'shop_id' => $_POST['shop_id'],
                    'product_id' => $_POST['product_id'],
                    'discount_type' => $_POST['discount_type'],
                    'amount' => $_POST['amount'],
                    'updated_at'=>date('Y-m-d H-i-s'),
                ]
            );
        }
    
        with('success', 'An account is successfully updated!');
        redirectTo('admin/discount');
   
}
 else {
   setError($errors);
   redirectTo( "admin/discount/edit?id=".$POST['id']);
 }

