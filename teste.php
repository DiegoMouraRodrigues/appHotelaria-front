<?php
    require_once __DIR__ . '/controller/authController.php';
    require_once __DIR__ . '/controller/passwordController.php';
      
    $data = [ 
        "email"=>"diego@hotmail.com",
        "senha"=>"1234"
    ];

    authController::login($conn, $data);

    //echo PasswordController::generateHash($data['senha']);
    
    //$hash = '$2y$10$nJ1s9CXFxQPEomsMC/sw2.f.lJbNj7IDJ7MEp5bDX.FEYGdE.2jPK';
    //echo "<br>";
   // echo PasswordController::validateHash($data['senha'], $hash);
?>