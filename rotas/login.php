<?php
require_once __DIR__ .  "/../controller/autoController.php";

if($_SERVER['REQUEST_METHOD'] === "post"){
    $data =json_decode(file_get_contents('php//input'), true);
    autoController::login($conn, $data);
}else{
    jsonResponse([
    'status' => 'erro',
    'message' => 'metodo não permitido'], 404);
 }
?>