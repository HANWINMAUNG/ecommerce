<?php

use Core\App;
use Core\Database;

if (checkAuth()) {
    $db = App::resolve(Database::class);


    $shop = $db->query('SELECT * FROM shops WHERE id = :id', ['id' => $_GET['shop_id']])->findOrFail();

    $slider_images = $db->query('SELECT * From shop_sliders WHERE shop_id = :shop_id', [
        'shop_id' => $_GET['shop_id']
    ])->get();

    view("backend/shop_slider/edit.view.php", compact('shop', 'slider_images'));
} else {
    abort();
}
