<?php

namespace app\models;

use app\models\User;
use app\utils\Cookie;
use app\core\Database;

class Auth
{

    public static function login(string $username, string $password)
    {
       return (new User())->login($username, $password) ? true : false;
    }
    public static function register(array $inputs)
    {
        $user = new user();
       if (($user->findByUsername($inputs['username']) && $user->findByemail($inputs['email']))){
           return false;
       }else{
         return $user->register($inputs);
       }
    }

    public static function user(): User|bool
    {
        if (self::check()) {
            $user = (new User())->findByUsername(Cookie::get('username'));
            unset($user->password);
            return $user;
        }
        
        return false;
    }

    public static function check() {
        return (bool)Cookie::get('username');
    }
}
