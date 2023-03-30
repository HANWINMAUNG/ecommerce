<?php
use Core\App;

use Core\Database;

if(false !== checkAuth() && session('auth_user')['is_admin']==1){

$db = App::resolve(Database::class);

$customers = $db->query('SELECT * FROM customers')->get();

 
view("backend/customer/index.view.php",compact('customers'));
}
else{
    abort(404);
}
?>