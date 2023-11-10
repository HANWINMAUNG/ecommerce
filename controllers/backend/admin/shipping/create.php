<?php



 use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

if(checkAuth()){
     $states =$db->query("SELECT * FROM states")->get();

     $response = ['data'=> $states];
     echo  json_encode($response);

view("backend/shipping/create.view.php",compact('states'));

}else
abort();