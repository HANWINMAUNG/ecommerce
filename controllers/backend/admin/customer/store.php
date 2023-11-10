<?php


use Core\App;

use Core\Database;

use Core\Validator;

require base_path('Core/Validator.php');
 
$db = App::resolve(Database::class);
// dd($_POST);
$errors =[];

if(!Validator::name($_POST['name'])){
    array_push($errors,"Only alphabets and whitespace are allowed! ");
}
 //if(!Validator::password($_POST['password'],1,8)){
 //   array_push($errors,"Please enter at least 8 chars or nums!");
//}
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
    
     //dd($_POST);
    $db->query("INSERT INTO customers(name,email,password,phone,address,profile,status,created_at,updated_at) VALUES
                      (:name,:email,:password,:phone,:address,:profile,:status,:created_at,:updated_at)",[
        'name' => $_POST['name'],
        'email'=>$_POST['email'],
        'password'=>md5($_POST['password']),
        'phone'=>$_POST['phone'],
        'address'=>$_POST['address'] == ''?null:$_POST['address'],
        'profile' => $profile_name ?? '',
        'created_at'=>date('Y-m-d H-i-s'),
        'updated_at'=>date('Y-m-d H-i-s'),
        'status'=>$_POST['status']
    ]); 
    with('success','An account is successfully created!');
   redirectTo('admin/customer');
}else{
    view("backend/customer/create.view.php",["errors" => $errors]); 
}
?>
