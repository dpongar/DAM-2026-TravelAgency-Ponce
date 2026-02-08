<?php
include '../clases/ConexionDatabase.php';

if (!isset($_GET['id'])) {
    header("Location: ../public/index.php");
    exit();
}

$id_viaje = $_GET['id'];

try {
    $stmt = $conn->prepare("SELECT * FROM Viajes WHERE id_viaje = :id");
    $stmt->execute([':id' => $id_viaje]);

    $viaje = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$viaje) {
        // No existe el viaje
        header("Location: ../public/index.php");
        exit();
    }

} catch (PDOException $e) {
    die("Error al obtener el viaje: " . $e->getMessage());
}