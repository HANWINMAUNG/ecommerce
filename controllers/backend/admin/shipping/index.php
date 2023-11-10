<?php

use Core\App;

use Core\Database;

if(checkAuth()){

$db = App::resolve(Database::class);

$shippings = $db->query(
    'SELECT shippings.id as id, states.name as  state_name,districts.name as district_name,townships.name as township_name,shippings.fee as fee
     FROM shippings LEFT JOIN states ON  states.id = shippings.state_id
      LEFT JOIN districts ON districts.id =shippings.district_id
      LEFT JOIN townships ON shippings.township_id = townships.id')->get();

    
view("backend/shipping/index.view.php",compact('shippings'));

}
else{
    abort(404);
}



