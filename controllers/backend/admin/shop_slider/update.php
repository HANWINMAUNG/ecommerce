<?php

use Core\App;
use Core\Database;

if (checkAuth()) {
    $errors = [];

    $db = App::resolve(Database::class);

    $shop = $db->query('SELECT * FROM shops WHERE id = :id', ['id' => $_POST['shop_id']])->findOrFail();

    $slider_images = $db->query('SELECT count(id) as slider_count From shop_sliders WHERE shop_id = :shop_id', [
        'shop_id' => $_POST['shop_id']
    ])->find();

    $current_slider_count = $slider_images['slider_count'];
    $add_slider_count = count($_FILES['image']['name']);

    if (($current_slider_count + $add_slider_count) > 5) {
        $errors[] = 'Maximum no of slider is 5.';
    }

    dd('less than 5');
} else {
    abort();
}
