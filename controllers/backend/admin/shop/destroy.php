<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$shop = $db->query('select * from shops where id= :id ', ['id' => $_POST['id']])->findOrFail();

$db->query("DELETE from shops where id = :id", ['id' => $_POST['id']]);

with('success', 'Delete is successfully!');

redirectTo('admin/shop');
