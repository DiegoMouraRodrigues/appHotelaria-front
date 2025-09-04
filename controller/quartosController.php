<?php
require_once __DIR__ . "/../model/quartoModel.php";

class QuartosController{
    public static function create($conn, $data){
        $result = quartoModel::create($conn, $data);
        if($result){
            return jsonResponse(['message' => 'quarto criado com sucesso']);
            //acertou
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o quarto'], 400);
            //errou
        }
    }

    public static function getAll($conn){
        $QuartoList = quartoModel::getAll($conn);
        return jsonResponse($QuartoList); 
    }    

    public static function getById($conn, $id){
        $QuartoList = quartoModel::getId( $conn, $id );
        return jsonResponse($QuartoList);
    }

   public static function delete($conn, $id){
    $QuartoDelete = quartoModel::delete($conn, $id);
    return jsonResponse($QuartoDelete);
   }

    public static function atualizar($conn, $id, $data){
        $QuartoAtualizar = quartoModel::atualizar($conn, $id, $data);
        if($QuartoAtualizar){
            return jsonResponse(['message' => 'quarto atualizado com sucesso']);
            //acertou
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o quarto'], 400);
            //errou
        }
    }
         
}
?>