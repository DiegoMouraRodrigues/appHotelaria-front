<?php
require_once __DIR__ . "/../controllers/authController.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    autoController::login($conn, $data);

} else {
    jsonResponse([
        'status' => 'erro',
        'message' => 'Método não permitido'

    ], 404);

}
?>