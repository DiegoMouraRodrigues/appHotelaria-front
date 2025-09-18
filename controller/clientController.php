<?php
require_once __DIR__ ."/../model/clientModel.php";
require_once __DIR__ ."/../controller/passwordController.php";
class clientController{
    public static function getAll($conn){
        $clientList = clientModel::getAll($conn);
        return jsonResponse($clientList); 
    }
    
    public static function getById($conn, $id){
        $ClientList = clientModel::getId( $conn, $id );
        return jsonResponse($ClientList);
    }

    public static function create($conn, $data){
        $data['senha'] = passwordController::generatehash($data['senha']);
        $result = clientModel::create($conn, $data);
        if($result){
            return jsonResponse(['message' => 'cliente criado com sucesso']);
            //acertou
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o cliente'], 400);
            //errou
        }
    }

     public static function atualizar($conn, $id, $data){
        $clientAtualizar = clientModel::atualizar($conn, $id, $data);
        if($clientAtualizar){
            return jsonResponse(['message' => 'cliente atualizado com sucesso']);
         
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o cliente'], 400);
           
        }
    }

    public static function delete($conn, $id){
    $clientDelete = clientModel::delete($conn, $id);
    return jsonResponse($clientDelete);
   }
}

?>