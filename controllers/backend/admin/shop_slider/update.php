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

    if (empty($errors)) {
        $names = $_FILES['image']['name'];
    
        foreach ($names as $key => $name) {
            $image_name = "form_images/slider/" . date('U') . str_replace(' ', '_', $_FILES['image']['name'][$key]);
            $tmp_name = $_FILES['image']['tmp_name'][$key];
    
            move_uploaded_file($tmp_name, $image_name);
    
            $db->query(
                "INSERT INTO shop_sliders ( shop_id, image) VALUES (:shop_id,:image)",
                [
                    'shop_id' => $_POST['shop_id'],
                    'image' => $image_name,
                ]
            );
        }
    
        with('success', 'An account is successfully updated!');
        redirectTo('admin/shop_slider');
   
}
 else {
   setError($errors);
   redirectTo( "admin/shop_slider/edit?shop_id=".$POST['shop_id']);
 }
}
