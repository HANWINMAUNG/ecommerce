<?php

use Core\App;
use Core\Database;

    $db = App::resolve(Database::class);

    $product=$db->query('SELECT * From products WHERE id=:id',[
        'id'=>$_GET['id']
    ])->findOrFail();

    
    view("frontend/shops/product.view.php" ,compact('product'));







