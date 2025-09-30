<?php

class clientModel{
    public static function getAll($conn){
        $sql = "SELECT * FROM clientes";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);        
    }
   
    public static function getId($conn, $id){
        $sql = "SELECT * FROM clientes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return  $stmt->get_result()->fetch_assoc();
    }

    public static function create($conn, $data){
        $sql = "INSERT clientes (nome, email, cpf, telefone, senha) VALUES (?,?,?,?,?)"; //comando sql
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", 
            $data["nome"],
            $data["email"], 
            $data["cpf"],
            $data["telefone"],
            $data["senha"] 
            
        );
        return $stmt->execute(); //retorna e executa o comando sql
    }

    
    public static function atualizar($conn, $id, $data){
        $sql = "UPDATE clientes SET nome = ?, email = ?, cpf = ?, telefone = ?, senha = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi",
            $data["nome"],
            $data["email"], 
            $data["cpf"],
            $data["telefone"],
            $data["senha"], 
            $id
        );
        return $stmt->execute();
    }

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

     public static function delete($conn, $id){
        $sql = "DELETE FROM clientes WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

}




?>