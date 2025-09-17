<?php
require_once __DIR__ . "/../controller/quartosController.php";

//pesquisar
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $segments[2] ?? null;
    if(isset($id)){
        QuartosController::getById($conn, $id);
    }else{
        QuartosController::getAll($conn);
    }

//criar
}
elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    QuartosController::create($conn, $data);
}

//atualizar
elseif  ($_SERVER['REQUEST_METHOD'] === "PUT"){
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;
    QuartosController::atualizar( $conn, $id, $data);

}

//deletar
elseif($_SERVER['REQUEST_METHOD'] === "DELETE"){
    $id = $segments[2] ?? null;

    if(isset($id)){
        QuartosController::delete($conn, $id);
    }else{
        jsonResponse(['message' => 'Id não definido'], 400);
    }
}

else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'

    ], 404);

}
?>