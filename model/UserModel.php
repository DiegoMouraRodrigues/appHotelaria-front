<?php

class UserModel{

    public static function validateUser($conn, $email, $password){
        //$sql = "SELECT * FROM usuarios WHERE email = ? ";
        $sql = "SELECT usuarios.id, usuarios.nome, usuarios.email, usuarios.senha, permissao.nome AS cargo FROM usuarios JOIN permissao ON permissao.id = usuarios.id_perm_fk WHERE usuarios.email = ?";

        $sqlmt = $conn->prepare($sql);
        $sqlmt->bind_param("s", $email);
        $sqlmt->execute();
        $result = $sqlmt->get_result();

        if($user = $result->fetch_assoc()){
            if(passwordController::validatehash($password, $user['senha'])){
                unset($user['senha']);
                return $user;
            }
        }
        return false;
    }
}

?>