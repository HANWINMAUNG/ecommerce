<?php 


use Core\App;

use Core\Database;

use Core\Validator;

require base_path('Core/Validator.php');
 
$db = App::resolve(Database::class);
//dd($_POST);
$errors =[];

if(!Validator::name($_POST['name'])){
    array_push($errors,"Only alphabets and whitespace are allowed! ");
}


$profile_name ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_name']['name']);


$profile_tmp = $_FILES['profile_name']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_name);

if(empty($errors)){
    
     
    $db->query("INSERT INTO shops(name,partner_id,description,open_time,close_time,standard,public,logo,created_at,updated_at) VALUES
                      (:name,:partner_id,:description,:open_time,:close_time,:standard,:public,:logo,:created_at,:updated_at)",[
        'name' => $_POST['name'],
        'partner_id'=>$_POST['partner_id'],
        'description'=>$_POST['description'],
        'open_time'=>$_POST['open_time'],
        'close_time'=>$_POST['close_time'],
        'logo' => $profile_name ?? '',
        'created_at'=>date('Y-m-d H-i-s'),
        'updated_at'=>date('Y-m-d H-i-s'),
        'standard'=>$_POST['standard'],
        'public'=>$_POST['public']
    ]); 
    
    with('success','An account is successfully created!');
   redirectTo('shop');
}else{
    view("backend/shop/create.view.php",["errors" => $errors]); 
}

