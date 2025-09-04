<?php
require_once 'config.php';

$erroDb = false;

// contrutor que esta puxando a infomação da config.php e verificando, se tiver tudo certo nas infomação, acessa o banco de dados se não
// aparece que da erro na hora de acessar o banco.  
try{
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if($conn->connect_error){
    $erroDb = true;
  }
}catch(mysqli_sql_exception){
    $erroDb = true;
}
?>
