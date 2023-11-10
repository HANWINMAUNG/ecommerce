<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$category=$db->query('SELECT * FROM categories WHERE id= :id ', ['id'=>$_POST['id']])->findOrFail();

$db->query("DELETE FROM categories WHERE id= :id", ['id'=>$_POST['id']]);

with('success','Delete is successfully!');

redirectTo('admin/category');
