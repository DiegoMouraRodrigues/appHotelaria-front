<?php
require_once __DIR__ . "/jwt/jwt_include.php";

use firebase\JWT\JWT;
use firebase\JWT\Key;

function create_Token($user){
    $payLoad = [
        "iss"=> "meusite", //nome do token
        "iat"=> time(), //tempo inicio
        "exp"=> time() + (60 * (60 * 1)), // 60 segundo *(60 minutos * 1hora) duração (tempo fim)
        "sub"=> $user
    ];
    return JWt::encode($payLoad, SECRET_KEY, "HS256");
}

function verify_token($token){
    try{
        $key = new Key(SECRET_KEY, "HS256");
        $decode = JWt::decode($token, $key);
        return $decode->sub;

    }catch(Exception $error){
        return "deu erro";
    }
}

?>
