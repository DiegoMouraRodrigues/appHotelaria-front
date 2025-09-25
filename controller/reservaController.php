<?php
require_once __DIR__ ."/../model/reservaModel.php";
   class reservasController{
        public static function create($conn, $data){
            $result = ReservaModel::create($conn, $data);
            if($result){
                return jsonResponse(['message'=> 'Reserva criada com sucesso']);
            }else{
            return jsonResponse(['message'=> 'Deu merda'], 400);
            }
        }

        public static function getId($conn, $id) {
            $result = ReservaModel::getId($conn, $id);
            return jsonResponse($result);
        }
}
?>