<?php
require_once 'config.php';

$erroDb = false;

try{
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if($conn->connect_error){
    $erroDb = true;
  }
}catch(mysqli_sql_exception){
    $erroDb = true;
}
?>
