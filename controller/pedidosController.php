<?php
require_once __DIR__ ."/../model/pedidoModel.php";
    class PedidoController{
         public static function create($conn, $data){
        $result = PedidoModel::create($conn, $data);
        if($result){
            return jsonResponse(['message' => 'adicionais criado com sucesso']);
            
        }else{
            return jsonResponse(['message'=> 'erro ao cadastrar o adicionais'], 400);
            
        }
    }

     public static function getAll($conn){
        $pedidotList = PedidoModel::getAll($conn);
        return jsonResponse($pedidotList); 
    }
    
    public static function getId($conn, $id){
        $pedidotList = PedidoModel::getId( $conn, $id );
        return jsonResponse($pedidotList);
    }
    }
   
?> 