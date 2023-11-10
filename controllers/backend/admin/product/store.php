<?php 


use Core\App;

use Core\Database;

use Core\Validator;

require base_path('Core/Validator.php');
 
$db = App::resolve(Database::class);

$errors =[];

if(!Validator::name($_POST['name'])){
    array_push($errors,"Only alphabets and whitespace are allowed! ");
}



$profile_one ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_one']['name']);


$profile_tmp = $_FILES['profile_one']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_one);

$profile_two ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_two']['name']);


$profile_tmp = $_FILES['profile_two']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_two);

$profile_three ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_three']['name']);


$profile_tmp = $_FILES['profile_three']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_three);
if(empty($errors)){
    
    //dd($_POST);
    $db->query("INSERT INTO products(name,shop_id,description,price,quantity,image_one,image_two,image_three,created_at,updated_at) VALUES
                      (:name,:shop_id,:description,:price,:quantity,:image_one,:image_two,:image_three,:created_at,:updated_at)",[
        'name' => $_POST['name'],
        'shop_id'=>intval($_POST['shop_id']),
        'description'=>$_POST['description'],
        'price'=>intval($_POST['price']),
        'quantity'=>intval($_POST['quantity']),
        // 'expiry_date'=>$_POST['expiry_date'],
        'image_one' => $profile_one ?? '',
        'image_two' => $profile_two ?? '',
        'image_three' => $profile_three ?? '',
        'created_at'=>date('Y-m-d H-i-s'),
        'updated_at'=>date('Y-m-d H-i-s')
        
    ]); 
    
    with('success','An account is successfully created!');
   redirectTo('admin/product');
}else{
    withError($errors);
    redirectTo('admin/product/create');
}

