<?php
require_once __DIR__ . "/../controller/quartosController.php";

if ( $_SERVER['REQUEST_METHOD'] === "GET" ){
    $id = $segments[2] ?? null;

    if (isset($id)){
        if (is_numeric($id)){
            QuartosController::getId($conn, $id);
        }elseif($id === "disponiveis"){
            $data = [
                "dataInicio" => isset($_GET['dataInicio']) ? $_GET['dataInicio'] : null,
                "dataFim" => isset($_GET['dataFim']) ? $_GET['dataFim'] : null,
                "qtd" => isset($_GET['qtd']) ? $_GET['qtd'] : null];

            QuartosController::buscarDisponivel($conn, $data);
        }
        else{
            jsonResponse(['message'=>'Essa Rota não existe'], 400);
        }
    }else{
            jsonResponse(['message'=>'getall'], 400);
    }
}

elseif ( $_SERVER['REQUEST_METHOD'] === "POST" ){
    $data = json_decode( file_get_contents('php://input'), true );
    QuartosController::create($conn, $data);
}


elseif ( $_SERVER['REQUEST_METHOD'] === "PUT" ){
    $data = json_decode( file_get_contents('php://input'), true );
    $id = $data['id'];
    QuartosController::atualizar($conn, $id, $data);
}

elseif ( $_SERVER['REQUEST_METHOD'] === "DELETE" ){
    $id = $segments[2] ?? null;

    if (isset($id)){
        QuartosController::delete($conn, $id);
    }else{
        jsonResponse(['message'=>"ID do quarto é obrigatório"], 400);
    }
}

else{
    jsonResponse([
        'status'=>'erro',
        'message'=>'Método não permitido'
    ], 400);
}

?>