<?php 


use Core\App;

use Core\Database;

use Core\Validator;

require base_path('Core/Validator.php');
 
$db = App::resolve(Database::class);

$errors =[];
//dd($_FILES['image']);
if(empty($errors)){

$_FILES['image']['name'];

$_FILES['image']['tmp_name'];

 for($i=0;$i<count($_FILES['image']['name']);$i++) {

   for($u=0;$u<count($_FILES['image']['tmp_name']);$u++){

    $profile_name ="form_images/".date('U').str_replace(' ', '_',$_FILES['image']['name']); 
       
    $profile_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($profile_tmp,$profile_name);
    
        //dd($_POST);
        $db->query("INSERT INTO shop_sliders(shop_id,image,created_at,updated_at) VALUES

                          (:shop_id,:image,:created_at,:updated_at)",[
           
            'shop_id'=>intval($_POST['shop_id']),
            'image' => $profile_name ?? '',
            'created_at'=>date('Y-m-d H-i-s'),
            'updated_at'=>date('Y-m-d H-i-s')
            
        ]); 
   }
};

    
    with('success','An account is successfully created!');
     
   redirectTo('shop_slider');
}else{
    view("backend/shop_slider/create.view.php",["errors" => $errors]); 
}

