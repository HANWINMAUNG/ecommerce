<?php

use Core\App;

use Core\Database;

if (checkAuth()) {
    $db = App::resolve(Database::class);

    $shop_sliders = $db->query(
        'SELECT count(shop_sliders.id) as slider_count, shop_sliders.shop_id, shops.name AS shop_name
        FROM shop_sliders
        LEFT JOIN shops
        ON shop_sliders.shop_id = shops.id
        GROUP BY shop_sliders.shop_id'
    )->get();

    view("backend/shop_slider/index.view.php", compact('shop_sliders'));
} else {
    abort(404);
}
