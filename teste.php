<?php
    require_once __DIR__ . "/controller/authController.php";
    require_once __DIR__ . "/controller/passwordController.php";
    require_once __DIR__ . "/helpers/token_jwt.php";  

      
    $data = [ 
        "email"=>"diego@hotmail.com",
        "senha"=>"1234"
    ];

    //    authController::login($conn, $data);

    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJtZXVzaXRlIiwiaWF0IjoxNzU2OTMwMzAxLCJleHAiOjE3NTY5MzM5MDEsInN1YiI6eyJpZCI6MTEsIm5vbWUiOiJ0ZXN0ZSIsImVtYWlsIjoiZGllZ29AaG90bWFpbC5jb20iLCJjYXJnbyI6IkFkbWluaXN0cmFkb3IifX0.PWgTbwKQm3dGR5oJ6Rj3O93gFHldGv7xkLaNzkupwDQ";
    echo var_dump(verify_token($token));

    //  echo PasswordController::generateHash($data['senha'], $conn);
    
    //$hash = '$2y$10$lEwUafr/UEU24Q.09L7doOULiTkbbtAq3vQ3.H1Up7xyYo1EKBZ1S';
    //echo "<br>";
    // echo PasswordController::validateHash($data['senha'], $hash);
?>