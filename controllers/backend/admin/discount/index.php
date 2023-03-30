<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$discounts = $db->query(
    'SELECT discounts.*, products.name AS product_name FROM discounts LEFT JOIN products ON discounts.product_id = products.id')->get();

    
view("backend/discount/index.view.php",compact('discounts'));

}
else{
    abort(404);
}



