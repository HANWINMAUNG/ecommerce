<?php


use Core\App;
use Core\Database;

require base_path('Core/Validator.php');

$db = App::resolve(Database::class);

$errors = [];

if (count($_FILES['image']['name']) > 5) {
    $errors[] = 'Maximum no of image is 5';
}

if (empty($errors)) {
    $names = $_FILES['image']['name'];

    foreach ($names as $key => $name) {
        $image_name = "form_images/slider/" . date('U') . str_replace(' ', '_', $_FILES['image']['name'][$key]);
        $tmp_name = $_FILES['image']['tmp_name'][$key];

        move_uploaded_file($tmp_name, $image_name);

        $db->query(
            "INSERT INTO shop_sliders(shop_id, image)
            VALUES (:shop_id,:image)",
            [
                'shop_id' => $_POST['shop_id'],
                'image' => $image_name,
            ]
        );
    }

    with('success', 'An account is successfully created!');
    redirectTo('shop_slider');
} else {
    withError($errors);
    redirectTo('shop_slider/create');
}

