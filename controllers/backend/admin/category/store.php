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

if(empty($errors)){
    
    //dd($_POST);
    $db->query("INSERT INTO categories(name,shop_id,created_at,updated_at) VALUES
                      (:name,:shop_id,:created_at,:updated_at)",[
                        'name' => $_POST['name'],
                        'shop_id'=>intval($_POST['shop_id']),
                        'created_at'=>date('Y-m-d H-i-s'),
                        'updated_at'=>date('Y-m-d H-i-s')
                        
                    ]); 
    
    with('success','An account is successfully created!');
   redirectTo('admin/category');
}else{
    withError($errors);
    redirectTo('admin/category/create');
}

