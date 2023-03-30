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

$profile_name ="form_images/".date('U').str_replace(' ', '_', $_FILES['profile_name']['name']);


$profile_tmp = $_FILES['profile_name']['tmp_name'];

move_uploaded_file($profile_tmp,$profile_name);


if(empty($errors)){
    
if(checkAuth()){    
    

    $db->query('update shops set name=:name,partner_id=:partner_id,open_time=:open_time,
    close_time=:close_time,description=:description,standard=:standard,public=:public,
    logo=:logo,updated_at=:updated_at where id=:id' , [

        'id'   => $_POST['id'],

        'name'  =>$_POST['name'],

        'partner_id' => $_POST['partner_id'],

        'open_time'=>$_POST['open_time'],
       
        'close_time'=>$_POST['close_time'],
        
        'description'=>$_POST['description'] ?? '',

        'logo' => $profile_name ?? '',

        'updated_at'=>date('Y-m-d H-i-s'),
        
        'standard'=>$_POST['standard'],

        'public'=>$_POST['public']
    ]);
    
    
    setSuccessMessage('successfully updated!');
    redirectTo('shop');

}
else{
    abort();
}
} 

$_SESSION['errors'] = $errors;
redirectTo('shop/edit');
exit();

