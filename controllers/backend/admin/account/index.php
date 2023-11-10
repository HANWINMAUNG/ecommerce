<?php
use Core\App;

use Core\Database;


$db = App::resolve(Database::class);

// $state_json= file_get_contents("../townships.json");

// $states = json_decode($state_json, 1);



// foreach($states as $state=>$districts){
//     // $db->query("INSERT INTO states (name) VALUES (:name )",[
//     //     'name'=>$state,
//     //     ]);

//      $state=$db->query('select * from states where name=:name',['name'=>$state])->find();
//     foreach($districts as $district=>$townships){
//         // $db->query("INSERT INTO districts (name,state_id) VALUES (:name,:state_id)",[
//         // 'name'=>$district,
//         // 'state_id'=>$state['id']]);

//         $district=$db->query('select * from districts where name=:name',['name'=>$district])->find();
//         foreach($townships as $township){
//             $db->query("INSERT INTO townships (name,district_id) VALUES (:name,:district_id)",[
//             'name'=>$township,
//             'district_id'=>$district['id']]);
//         }

//     }
//     }
//     dd($state);
if(false !== checkAuth() && session('auth_user')['is_admin']==1){

$db = App::resolve(Database::class);

$users = $db->query('SELECT * FROM users')->get();

 
view("backend/account/index.view.php",compact('users'));
}
else{
    abort(404);
}
