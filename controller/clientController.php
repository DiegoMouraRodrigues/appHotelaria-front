<?php
require_once __DIR__ . "/../model/clientModel.php";
require_once __DIR__ . "/../controller/passwordController.php";
require_once __DIR__ . "/../helpers/token_jwt.php";

class clientController
{
    public static function getAll($conn)
    {
        $clientList = clientModel::getAll($conn);
        return jsonResponse($clientList);
    }

    public static function getById($conn, $id)
    {
        $ClientList = clientModel::getId($conn, $id);
        return jsonResponse($ClientList);
    }

    public static function create($conn, $data)
    {
        $data['senha'] = passwordController::generatehash($data['senha']);
        $result = clientModel::create($conn, $data);
        if ($result) {
            return jsonResponse(['message' => 'cliente criado com sucesso']);
            //acertou
        } else {
            return jsonResponse(['message' => 'erro ao cadastrar o cliente'], 400);
            //errou
        }
    }

    public static function atualizar($conn, $id, $data)
    {
        $clientAtualizar = clientModel::atualizar($conn, $id, $data);
        if ($clientAtualizar) {
            return jsonResponse(['message' => 'cliente atualizado com sucesso']);

        } else {
            return jsonResponse(['message' => 'erro ao cadastrar o cliente'], 400);

        }
    }

    public static function delete($conn, $id)
    {
        $clientDelete = clientModel::delete($conn, $id);
        return jsonResponse($clientDelete);
    }

    public static function loginClient($conn, $data)
    {
        $data['email'] = trim($data['email']);
        $data['senha'] = trim($data['senha']);

        // Confirmar se tem algum campo vazio
        if (empty($data['email']) || empty($data['senha'])) {
            return jsonResponse(
                [
                    "status" => "erro",
                    "message" => "Preencha todos os campos"

                ],
                401
            );
        }
        $user = ClientModel::validateUser($conn, $data['email'], $data['senha']);
        if ($user) {
        $token = create_Token($user);
        return jsonResponse([ "token" => $token ]);
    } 
        
        else {
            return jsonResponse([
                "status" => "erro",
                "message" => "Credenciais inválidas!"
            ], 401);
        }
    }
}

?>