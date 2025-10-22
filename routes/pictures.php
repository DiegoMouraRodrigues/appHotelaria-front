<?php
require_once __DIR__ . "/../controllers/UploadController.php";

//rota de teste
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $data = $_FILES['fotos'] ?? null;
    UploadController::uploads(($data));

}
else{
    jsonResponse(['status' => 'erro', 'message' => 'metodo não permetido'],405);
}



?>