<?php 

//  dd($_POST);
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
    if(checkAuth()){      
    // dd($_POST);
    $db->query("UPDATE categories SET 
                     name= :name,shop_id=:shop_id,updated_at=:updated_at WHERE id=:id",[
                    'id'=>$_POST['id'],
                    'name' => $_POST['name'],
                    'shop_id'=>intval($_POST['shop_id']),
                    'updated_at'=>date('Y-m-d H-i-s')
                
    ]); 
    
    setSuccessMessage('successfully updated!');
    redirectTo('category');

}
else{
    abort();
}
} 

setError($errors);
   redirectTo('category/edit');
