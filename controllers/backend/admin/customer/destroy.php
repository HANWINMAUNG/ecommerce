<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$customer=$db->query('select * from customers where id= :id ', ['id'=>$_POST['id']])->findOrFail();

$db->query("delete from customers where id= :id", ['id'=>$_POST['id']]);

with('success','Delete is successfully!');

redirectTo('admin/customer');
