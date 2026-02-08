<?php
include '../clases/ConexionDatabase.php';

if (isset($_GET['id'])) {
    $id_viaje = $_GET['id'];

    try {
        $sql = "DELETE FROM Viajes WHERE id_viaje = :id";
        
        $stmt = $conn->prepare($sql);

        $stmt->execute([':id' => $id_viaje]);

        header("Location: ../public/index.php");
        exit();

    } catch (PDOException $e) {
        die("Error al eliminar el viaje: " . $e->getMessage());
    }
} else {
    header("Location: ../public/index.php");
    exit();
}
?>