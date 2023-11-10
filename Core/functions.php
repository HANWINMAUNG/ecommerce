<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo"</pre>";

    die();
}

function asset_image($path)
{
    return '/' . $path;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attribute = [])
{
    extract($attribute);
    require base_path('views/' . $path);
}

function with($key, $message)
{
    $_SESSION[$key]=$message;
}

function session($key)
{
    if (!is_null($_SESSION[$key])) {
        return $_SESSION[$key];
    }
}

function redirectTo($path='')
{
    header("location: /{$path}");
    
    exit();  
}

function checkAuth()
{
    return isset($_SESSION['auth_user']);
}

function getAuthUser()
{
    if (checkAuth()) {
        return $_SESSION['auth_user'];
    }

    return null;
}

function checkCus()
{
    return isset($_SESSION['auth_cus']);
}

function getAuthCus()
{
    if (checkCus()) {
        return $_SESSION['auth_cus'];
    }

    return null;
}

function bcrypt($value)
{
    return md5($value);
}

function setError($message)
{
    $errors[] = $message;

    $_SESSION['errors'] = $errors;
}

function setSuccessMessage($message)
{
    $_SESSION['success'] = $message;
}

function withError($errors)
{
    $_SESSION['error_messages'] = $errors;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function countCart(){
    if($_SESSION['cart']) {
        $quantity = array_column($_SESSION['cart'], 'quantity');

     return  array_sum($quantity);
    }

    return 0;
}

function quantityCart($quantity,$price){

     $quantity*$price=$total;

}