<?php
    $title = "home";
    require_once "../config/database.php";
    require_once "../controller/autoController.php";
    
    $data = [
        "email" => "diego@hotmail.com",
        "senha" => "1234"
    ];

    autoController::login($conn, $data);
?>

<h1>home</h1>

<?php

require_once 'utils/rodape.php'
?>