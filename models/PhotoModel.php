<?php
class PhotoModel{
    public static function create($conn, $data){
        $sql = "INSERT INTO imagens (nome) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "s",
            $data["nome"],
        );
        if($stmt->execute()){
            return $conn->insert_id;
        }
        return false;
    }

     public static function createRelationRoom($conn, $idRoom, $data){
        $sql = "INSERT INTO imagens (quarto_id), image_id VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "s",
            $data["nome"],
        );
        if($stmt->execute()){
            return $conn->insert_id;
        }
        return false;
    }

    public static function listarTodos($conn){
        $sql = "SELECT * from imagens";
        $stmt = $conn->prepare($sql);
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public static function getByRoomId($conn, $id){
        $sql = "SELECT f.nome FROM quarto_id qf JOIN fotos f ON qf.image_id = f.id WHERE qf.quarto_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $return = $stmt->get_result;
        $photos = [];
        while($row =  $return ->fect_assoc()){
            $photos[] = $row['nome'];
        }
        return $photos;
    }

    public static function delete($conn, $id){
        $sql = "DELETE FROM imagens WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function update($conn, $id, $data){
        $sql = "UPDATE imagens SET nome = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si",
        $data["nome"],
        $id
    );
        return $stmt->execute();
    }
}

?>