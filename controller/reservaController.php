<?php
require_once __DIR__ ."/../model/reservaModel.php";
   class reservasController{
    
        public static function create($conn, $data){
            ValidatorController::validate_data($data, ["id_adicional_fk, id_quarto_fk, id_pedido_fk, dataInicio, datafim"]);
            $data["dataInicio"] = ValidatorController::fix_dateHour($data['dataInicio'], 14);
            $data["datafim"] = ValidatorController::fix_dateHour($data["datafim"], 12);
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