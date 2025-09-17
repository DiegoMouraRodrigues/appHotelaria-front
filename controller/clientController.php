<?php
require_once __DIR__ ."/../model/clientModel.php";
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
        $result = clientModel::create($conn, $data);
        if($result){
            return jsonResponse(['message' => 'cliente criado com sucesso']);
            //acertou
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o cliente'], 400);
            //errou
        }
    }

}

?>