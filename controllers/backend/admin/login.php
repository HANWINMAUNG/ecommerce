<?php

    use Core\App;

    use Core\Database;

    $db = App::resolve(Database::class);

    $email = $_POST['email'];
    $password = bcrypt($_POST['password']);

    $user=$db->query('SELECT * from users where email= :email AND password = :password AND is_admin = :is_admin',[
        'email' => $email,
        'password'=>$password,
        'is_admin'=>$_POST['is_admin']
    ])->find();

    if(false !== $user && $user['is_admin']==1 ){
        
        $_SESSION['auth_user'] = $user;
        
        redirectTo('admin');
    }


    if(false !== $user && $user['is_admin']==0){
        $_SESSION['auth_user'] = $user;
        
        redirectTo('shop');
        
    }

    setError('These credentials does not match our record');

    // redirectTo('admin/login');
?>