<?php

namespace App\E77Cookies\Library;

class LoginManager
{

    public static function csrf($type = null): string
    {
        $cookie_name = 'csrf_token';
        if (!isset($_COOKIE[$cookie_name])) {
            $cookie_value = self::randomString();
            setcookie($cookie_name, $cookie_value, time() + 100, "/"); // 86400 = 1 day
        } else {
            $cookie_value = $_COOKIE[$cookie_name];
        }

        if(!empty($type)){
            return "<input type='text' name='csrf_token' value='{$cookie_value}' />";
        }

        return $cookie_value;
    }

    private static function randomString(int $length = 8): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}