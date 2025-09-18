<?php
require_once __DIR__ . "/../controller/clientController.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $segments[2] ?? null;
    if(isset($id)){
        clientController::getById($conn, $id);
    }else{
        clientController::getAll($conn);
    }
}

elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    clientController::create($conn, $data);
}

elseif  ($_SERVER['REQUEST_METHOD'] === "PUT"){
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['id'] ?? null;
    clientController::atualizar( $conn, $id, $data);
}

elseif($_SERVER['REQUEST_METHOD'] === "DELETE"){
    $id = $segments[2] ?? null;

    if(isset($id)){
        clientController::delete($conn, $id);
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