<?php

class quartoModel{
    public static function create($conn, $data){
        $sql = "INSERT quartos (nome, numero, camaSolteiro, camaCasal, disponivel, preco) VALUES (?,?,?,?,?,?)"; //comando sql
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siiiid", 
            $data["nome"],
            $data["numero"], 
            $data["camaSolteiro"],
            $data["camaCasal"],
            $data["disponivel"], 
            $data["preco"]
        );
        return $stmt->execute(); //retorna e executa o comando sql
    }

    public static function getAll($conn){
        $sql = "SELECT * FROM quartos";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);        
    }

    public static function getId($conn, $id){
         $sql = "SELECT * FROM quartos WHERE id = ?";
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("i", $id);
         $stmt->execute();

         return  $stmt->get_result()->fetch_assoc();
    }

     public static function delete($conn, $id){
        $sql = "DELETE FROM quartos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public static function atualizar($conn, $id, $data){
        $sql = "UPDATE quartos SET nome = ?, numero = ?, camaSolteiro = ?, camaCasal = ?, disponivel = ?, preco = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt ->Bind_param("siiiidi",
            $data["nome"],
            $data["numero"], 
            $data["camaSolteiro"],
            $data["camaCasal"],
            $data["disponivel"], 
            $data["preco"],
            $id
        );
        return $stmt -> execute();
    }

     public static function buscarDisponiveis($conn,$data) {
        $sql = "SELECT q.id, q.nome, q.camaSolteiro, q.camaCasa, q.disponivel, q.preco
        FROM quartos q
        WHERE q.id NOT IN (
        SELECT
        r.quarto_id
        FROM
        reservas r
        WHERE
        (r.fim >= ? AND r.inicio <= ?)
        )
        AND q.disponivel = true
        AND ((q.camaSolteiro * 2) + q.camaCasa) >= ?;";

        $stmt = $conn->prepare($sql);

        $inicio = $data['dataInicio'];
        $fim = $data['dataFim'];
        $capacidade = $data['capacidade'] ?? 1;

        $stmt->bind_param("ssi", $fim, $inicio, $capacidade);
        return $stmt->execute();

    }

}
?>