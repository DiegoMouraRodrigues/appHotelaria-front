<?php
    require_once "/../model/clientModel.php";

    class clientController{
        public static function cliente($conn, $data){
            $data['nome'] = trim($data['nome']);
            $data['email'] = trim($data['email']);
            $data['cpf'] = trim($data['cpf']);

             if( empty($data['email']) || empty($data['senha']) || empty($data['cpf']) ) {
                return jsonResponse(
                [
                "status"=>"erro",
                "message"=>"Preencha todos os campos"

                ], 401); 
            }

            
        }
    }
?>