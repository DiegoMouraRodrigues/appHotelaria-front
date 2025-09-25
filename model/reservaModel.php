<?php

class ReservaModel{
    public static function create($conn, $data) {
        $sql = "INSERT INTO reservas (id_adicional_fk, id_quarto_fk, id_pedido_fk, dataInicio, dataFim) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiss",
            $data["id_adicional_fk"],
            $data["id_quarto_fk"],
            $data["id_pedido_fk"],
            $data["dataInicio"],
            $data["dataFim"]
        );
        return $stmt->execute();
    }

    public static function getId($conn, $id) {
        $sql = "SELECT * FROM reservas WHERE id_pedido_fk= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>