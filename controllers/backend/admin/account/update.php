<?php

use Core\App;

use Core\Database;
use Core\Validator;
$db= App::resolve(Database::class);
require base_path('Core/Validator.php');


$errors = [];
if(!Validator::name($_POST['name'])){
    array_push($errors,"Only alphabets and whitespace are allowed! ");
}

if(!Validator::confirmPassword($_POST['password'],$_POST['com_password'])){
    array_push($errors,"Confirm password must be as same as password!");
}
if(Validator::string($_POST['email']) && !Validator::email($_POST['email'])){
    array_push($errors,"Please enter email format!");
}

if(!Validator::phone($_POST['phone'])){
    array_push($errors,"Please enter a phone number!");
}
   

$profile_name ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_name']['name']);


$profile_tmp = $_FILES['profile_name']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_name);


if(empty($errors)){
    
if(checkAuth()){    
    
    //dd($_POST);
    $db->query('update users set name=:name,email=:email,phone=:phone,password=:password,address=:address,is_admin=:is_admin,profile=:profile,updated_at=:updated_at where id=:id' , [
        'id'   => $_POST['id'],
        'name' => $_POST['name'],
        'email'=>$_POST['email'],
        'password'=>md5($_POST['password']),
        'phone'=>$_POST['phone'],
        'is_admin' =>$_POST['is_admin'],
        'address'=>$_POST['address'],
        'profile' => $profile_name ?? '',
        'updated_at'=>date('Y-m-d H-i-s')
        
        
    ]);
   
    
    setSuccessMessage('successfully updated!');
    redirectTo('admin/accounts');

}
else{
    abort();
}
} 

$_SESSION['errors'] = $errors;
redirectTo('admin/accounts/edit');
exit();

