<?php

use Core\App;

use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = bcrypt($_POST['password']);

$user=$db->query('SELECT * from users where email= :email AND password = :password',[
    'email' => $email,
    'password'=>$password,
    ])->find();


   
 if(false !== $user){
    $_SESSION['auth_cus'] = $user;

    redirectTo('');


 }
setError('These credentials does not match our record');

    redirectTo('/login');



?>