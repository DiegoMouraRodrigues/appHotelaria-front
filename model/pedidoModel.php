<?php
class PedidoModel{
 public static function create($conn, $data) {
        $sql = "INSERT INTO pedidos (id_usuario_fk, id_cliente_fk, pagamento) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis",
            $data["id_usuario_fk"],
            $data["id_cliente_fk"],
            $data["pagamento"]
        );
        return $stmt->execute();
    }

    public static function getAll($conn) {
        $sql = "SELECT * FROM pedidos";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getId($conn, $id) {
        $sql = "SELECT * FROM pedidos WHERE id= ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>