<?php

class passwordController{
    public static function generatehash($password){
    return password_hash($password, PASSWORD_BCRYPT);
    }

     public static function validatehash($value, $hash){
    return password_verify($value, $hash);
    }
}

?>