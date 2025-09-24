<?php
require_once __DIR__ ."/../controller/adicionaisController.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $segments[2] ?? null;
    if(isset($id)){
        adicionalController::getId($conn, $id);
    }else{
        adicionalController::getAll($conn);
    }
}

elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    adicionalController::create($conn, $data);
}

elseif  ($_SERVER['REQUEST_METHOD'] === "PUT"){
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;
    adicionalController::atualizar( $conn, $id, $data);
}

elseif($_SERVER['REQUEST_METHOD'] === "DELETE"){
    $id = $segments[2] ?? null;

    if(isset($id)){
        adicionalController::delete($conn, $id);
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