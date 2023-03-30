<?php



use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$shop_slider=$db->query('select * from shop_sliders where id= :id ', ['id'=>$_POST['id']])->findOrFail();

$db->query("delete from shop_sliders where id= :id", ['id'=>$_POST['id']]);

with('success','Delete is successfully!');

redirectTo('shop_slider');
