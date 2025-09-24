<?php
require_once __DIR__ ."/../model/adicionalModel.php";

class adicionalController{
     public static function getAll($conn){
        $adicionaltList = adicionalModel::getAll($conn);
        return jsonResponse($adicionaltList); 
    }
    
    public static function getId($conn, $id){
        $adicionaltList = adicionalModel::getId( $conn, $id );
        return jsonResponse($adicionaltList);
    }

    public static function create($conn, $data){
        $result = adicionalModel::create($conn, $data);
        if($result){
            return jsonResponse(['message' => 'adicionais criado com sucesso']);
            
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o adicionais'], 400);
            
        }
    }

    public static function atualizar($conn, $id, $data){
        $adicionaltAtualizar = adicionalModel::atualizar($conn, $id, $data);
        if($adicionaltAtualizar){
            return jsonResponse(['message' => 'adicionais atualizado com sucesso']);
         
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o adicionais'], 400);
           
        }
    }

    public static function delete($conn, $id){
    $adicionalDelete = AdicionalModel::delete($conn, $id);
    return jsonResponse($adicionalDelete);
   }    

}
?>