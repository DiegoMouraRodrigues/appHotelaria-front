<?php
require_once __DIR__ . "/../controller/quartosController.php";

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $id = $segments[2] ?? null;
    if(isset($id)){
        QuartosController::getById($conn, $id);
    }else{
        QuartosController::getAll($conn);
    }

}elseif($_SERVER['REQUEST_METHOD'] === "DELETE"){
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