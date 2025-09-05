<?php
require_once __DIR__ . "/../controller/authController.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true); //decodificando as informação  para json
    authController::login($conn, $data);

} else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'

    ], 404);

}
?>