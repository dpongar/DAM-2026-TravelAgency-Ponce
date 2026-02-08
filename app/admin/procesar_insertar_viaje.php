<?php

include '../clases/ConexionDatabase.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombreImagen = $_FILES['imagen_archivo']['name'];
    $rutaTemporal = $_FILES['imagen_archivo']['tmp_name']; 
    $carpetaDestino = "../assets/images/";

    $rutaFinal = $carpetaDestino . basename($nombreImagen); //Limpia el nombre del archivo de posibles rutas extrañas y se queda solo con el nombre real (el .jpg)
    
    //Si NO se ha podido mover el archivo, avisa.
    if (!(move_uploaded_file($rutaTemporal, $rutaFinal))) {
        echo 'No se ha cargado correctamente';
    }

    try {
        $sql = "INSERT INTO Viajes (titulo, descripcion, fecha_inicio, fecha_final, precio, destacado, tipo_viaje, plazas, imagen) 
                VALUES (:titulo, :desc, :inicio, :final, :precio, :dest, :tipo, :plazas, :img)";

        $stmt = $conn->prepare($sql);

        // Ejecutamos pasando los valores del formulario
        $stmt->execute([
                ':titulo' => $_POST['titulo'],
                ':desc' => $_POST['descripcion'],
                ':inicio' => $_POST['fecha_inicio'],
                ':final' => $_POST['fecha_final'],
                ':precio' => $_POST['precio'],
                ':dest' => $_POST['destacado'],
                ':tipo' => $_POST['tipo_viaje'],
                ':plazas' => $_POST['plazas'],
                ':img' => $rutaFinal
        ]);

        header("Location: ../public/index.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al insertar el viaje: " . $e->getMessage();
    }
}
?>