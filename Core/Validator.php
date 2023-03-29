<?php

namespace Core;

class Validator
{
    public static function string($value, $min =1, $max =INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function name($value)
    {
        $value = trim($value);

        $pattern = "/^[a-zA-z ]*$/";

        return preg_match($pattern, $value);
    }

    public static function password($value, $min=1, $max=8)
    {
        return strlen($value)>=$min && strlen($value) <=$max;
    }

    public static function phone($value)
    {
        $value = trim($value);
        $pattern ="/^[0-9]{11}+$/";
        return preg_match($pattern, $value);
    }

    public static function confirmPassword($password, $com_password)
    {
        return $password === $com_password;
    }
}
