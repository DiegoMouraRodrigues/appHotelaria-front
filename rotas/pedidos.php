<?php
require_once __DIR__ ."/../controller/pedidosController.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data["id"] ?? null;
    
    if (isset($id)) {
        PedidoController::getId($conn, $id);
    } else {
        PedidoController::getAll($conn);
    }
}

elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    PedidoController::create($conn, $data);
}

else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Metodo não permitido',
    ], 400);
}
?>