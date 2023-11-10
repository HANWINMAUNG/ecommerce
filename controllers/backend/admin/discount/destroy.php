<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$discount=$db->query('select * from discounts where id= :id ', ['id'=>$_POST['id']])->findOrFail();

$db->query("delete from discounts where id= :id", ['id'=>$_POST['id']]);

with('success','Delete is successfully!');

redirectTo('admin/discount');
