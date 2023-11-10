<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id=$_GET['id'];

$shop_id = $_GET['shop_id'];
$db->query("DELETE FROM shop_sliders WHERE id= :id", ['id'=>$id]);

with('success','Delete is successfully!');

 redirectTo("admin/shop_slider/edit?shop_id=$shop_id");

