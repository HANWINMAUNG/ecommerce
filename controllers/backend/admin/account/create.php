<?php
if(false !== checkAuth() && session('auth_user')['is_admin']==1){

    view("backend/account/create.view.php");
}
else if(false !== checkAuth() && session('auth_user')['is_admin']==0){
    abort(404);
}
else if(false == checkAuth())
{
  view("backend/login.view.php");
}



?>