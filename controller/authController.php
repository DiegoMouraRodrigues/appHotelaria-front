<?php

require_once __DIR__ . "/../model/UserModel.php";
require_once __DIR__ . "/../model/clientModel.php";
require_once __DIR__ . "/../helpers/token_jwt.php";
require_once "passwordController.php";
require_once __DIR__ . "/validadorController.php";

class authController{
    public static function login($conn, $data)
    {
        $data['email'] = trim($data['email']);
        $data['senha'] = trim($data['senha']);

        // Confirmar se tem algum campo vazio
        if (empty($data['email']) || empty($data['senha'])) {
            return jsonResponse(
                ["status" => "erro","message" => "Preencha todos os campos"],401);
        }
        //validação
        $user = UserModel::validateUser($conn, $data['email'], $data['senha']);
        if ($user) {
            $token = create_Token($user);
            return jsonResponse(["token" => $token]);
        } else {
            return jsonResponse(
                ["reposta" => "Erro", "message" => "Credenciais invalidas"],401);
        }
    }

    public static function loginCliente($conn, $data)
    {
        $data['email'] = trim($data['email']);
        $data['senha'] = trim($data['senha']);

        // Confirmar se tem algum campo vazio
        if (empty($data['email']) || empty($data['senha'])) {
            return jsonResponse(
                ["status" => "erro","message" => "Preencha todos os campos"],401);
        }
        //validação
        $user = clientModel::validateClient($conn, $data['email'], $data['senha']);
        if ($user) {
            $token = create_Token($user);
            return jsonResponse(["token" => $token]);
        } else {
            return jsonResponse(
                ["reposta" => "Erro", "message" => "Credenciais invalidas"],401);
        }
    }

}

?>