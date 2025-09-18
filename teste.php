<?php
    require_once __DIR__ . "/controller/authController.php";
    require_once __DIR__ . "/controller/passwordController.php";
    require_once __DIR__ . "/helpers/token_jwt.php"; 
    require_once __DIR__ . "/controller/quartosController.php";
    require_once __DIR__ . "/controller/clientController.php";
 





    
    

  
   

    // QuartosController::atualizar($conn, 4, $data); //atuando dados do quartos
    // QuartosController::delete($conn, 2); //esta deletando a partir do id informado
    // QuartosController::getById($conn, 4); //pesquisa a partir do id do quarto
    // QuartosController::getAll($conn) //pesquisa todas as informação contida no quartos
    // QuartosController::create($conn, $data);  // esta inserindo a informação no bando e confimando que foi inserido ou não a infomação;
   
    // clientController::getAll($conn); 
    // clientController::getById($conn,2);
    // clientController::create($conn, $data);
    // clientController::atualizar($conn, 5, $data);
    // clientController::delete($conn,5);
    
    
    

    // $data = [ 
    //     "email"=>"diego@hotmail.com",
    //     "senha"=>"1234"
    // ];

    // authController::login($conn, $data);  //esta verificando se vai ou nao inserir a informação do usuario
    

    // $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJtZXVzaXRlIiwiaWF0IjoxNzU2OTMwMzAxLCJleHAiOjE3NTY5MzM5MDEsInN1YiI6eyJpZCI6MTEsIm5vbWUiOiJ0ZXN0ZSIsImVtYWlsIjoiZGllZ29AaG90bWFpbC5jb20iLCJjYXJnbyI6IkFkbWluaXN0cmFkb3IifX0.PWgTbwKQm3dGR5oJ6Rj3O93gFHldGv7xkLaNzkupwDQ";
    // echo var_dump(verify_token($token));

    //  echo PasswordController::generateHash($data['senha'], $conn);
    
    //$hash = '$2y$10$lEwUafr/UEU24Q.09L7doOULiTkbbtAq3vQ3.H1Up7xyYo1EKBZ1S';
    //echo "<br>";
    // echo PasswordController::validateHash($data['senha'], $hash);
?>