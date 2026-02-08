<?php
include '../clases/ConexionDatabase.php';

if (isset($_POST['actualizar'])) {
    
    // Recogemos los datos del formulario POST
    $id = $_POST['id_viaje'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_final = $_POST['fecha_final'];
    $plazas = $_POST['plazas'];
    $tipo_viaje = $_POST['tipo_viaje'];
    $precio = $_POST['precio'];
    $destacado = $_POST['destacado'];
    
    $nombreImagen = $_FILES['imagen_archivo']['name'];
    $rutaTemporal = $_FILES['imagen_archivo']['tmp_name']; 
    $carpetaDestino = "../assets/images/";

    $rutaFinal = $carpetaDestino . basename($nombreImagen); //Limpia el nombre del archivo de posibles rutas extrañas y se queda solo con el nombre real (el .jpg)
    
    //Si NO se ha podido mover el archivo, avisa.
    if (!(move_uploaded_file($rutaTemporal, $rutaFinal))) {
        echo 'No se ha cargado correctamente';
    }


    try {
        $sql_update = "UPDATE Viajes SET 
                       titulo = :titulo, 
                       descripcion = :desc,
                       fecha_inicio = :inicio,
                       fecha_final = :final,
                       plazas = :plazas,
                       tipo_viaje = :tipo,
                       destacado = :destacado,
                       precio = :precio,
                       imagen = :imagen
                       WHERE id_viaje = :id";
        
        $stmt = $conn->prepare($sql_update);

        // Ejecuto pasando los valores reales
        $stmt->execute([
            ':titulo' => $titulo,
            ':desc'   => $descripcion,
            ':inicio' => $fecha_inicio,
            ':final'  => $fecha_final,
            ':plazas' => $plazas,
            ':tipo' => $tipo_viaje,
            ':destacado' => $destacado,
            ':precio' => $precio,
            ':imagen' => $rutaFinal,
            ':id'     => $id
        ]);

    } catch (PDOException $e) {
        die("Error al actualizar los datos: " . $e->getMessage());
    }
}

if (isset($_GET['id'])) {
    $id_viaje = $_GET['id'];
    
    try {
        // Buscamos el registro por su ID
        $stmt = $conn->prepare("SELECT * FROM Viajes WHERE id_viaje = :id");
        $stmt->execute([':id' => $id_viaje]);
        
        $viaje = $stmt->fetch(PDO::FETCH_ASSOC);

        // Si el ID no existe en la base de datos
        if (!$viaje) {
            header("Location: ../public/index.php");
            exit();
        }
    } catch (PDOException $e) {
        die("Error al consultar el safari: " . $e->getMessage());
    }
} else {
    // Si intentan entrar sin un ID en la URL
    header("Location: ../public/index.php");
    exit();
}
?>