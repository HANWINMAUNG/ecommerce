<?php
if(checkAuth()){

    view("backend/customer/create.view.php");
}
else {
    abort(404);
}
