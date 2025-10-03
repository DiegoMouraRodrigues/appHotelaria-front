<?php
require_once __DIR__ . "/../model/quartoModel.php";
require_once __DIR__ ."/validadorController.php";

class QuartosController{
    public static function create($conn, $data)
    {
         ValidatorController::validate_data($data, ["nome", "numero", "camaSolteiro", "camaCasal", "disponivel", "preco"]);
        $camposObrigatorios = ["nome", "numero", " camaSolteiro", "camaCasal", "disponivel", "preco"];
        $erros = [];

        foreach ($camposObrigatorios as $campo) {
            if (!isset($data[$campo]) || empty($data[$campo])) {
                $erros[] = $campo;
            }
        }

        if (!empty($erros)) {
            return jsonResponse(['message' => 'Erro, falta o comando: ' . implode(',', $erros)], 404);
        }


        $result = quartoModel::create($conn, $data);
        if ($result) {
            return jsonResponse(['message' => 'Quarto criado com sucesso']);
        } else {
            return jsonResponse(['message' => 'Deu merda'], 400);
        }
    }
    public static function getAll($conn)
    {
        $listaQuartos = quartoModel::getAll($conn);
        return jsonResponse($listaQuartos);
    }

    public static function getId($conn, $id)
    {
        $listarporId = quartoModel::getId($conn, $id);
        return jsonResponse($listarporId);
    }

    public static function delete($conn, $id)
    {
        $result = quartoModel::delete($conn, $id);
        if ($result) {
            return jsonResponse(['message' => 'Quarto deletado com sucesso']);
        } else {
            return jsonResponse(['message' => 'Falha ao deletar'], 400);
        }
    }

    public static function atualizar($conn, $id, $data)
    {
        $result = quartoModel::atualizar($conn, $id, $data);
        if ($result) {
            return jsonResponse(['message' => 'Quarto atualizado com sucesso']);
        } else {
            return jsonResponse(['message' => 'Falha ao atualizar o quarto'], 400);
        }
    }

       public static function buscarDisponivel($conn,$data) {
        ValidatorController::validate_data($data, ["dataInicio", "dataFim", "qtd"]);

        $data["dataInicio"] = ValidatorController::fix_dateHour($data["dataInicio"], 14);
        $data["dataFim"] = ValidatorController::fix_dateHour($data["dataFim"], 12);

        $resultado = quartoModel::get_available($conn,$data);

        if ($resultado) {
            return jsonResponse(['Quartos' => $resultado]);
        } else {
            return jsonResponse(['mesage'=>"erro ao buscar quartos disponiveis"],400);
        }
    }
         
}
?>