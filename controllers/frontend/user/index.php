<?php


use Core\App;

use Core\Database;


    $db = App::resolve(Database::class);

    $shops = $db->query(
        'SELECT shops.*, users.name AS partner_name FROM shops LEFT JOIN users ON shops.partner_id = users.id'
    )->get();


    view("frontend/index.view.php", compact('shops'));



