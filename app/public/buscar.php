<?php
include '../admin/procesar_buscar.php';
include "../assets/CSS.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Buscar viajes</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>

        <h2 style="text-align:center; margin:30px;">Resultados de búsqueda</h2>

        <div class="lista-viajes">
            <?php while ($viaje = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="item-viaje">
                    <img src="<?php echo $viaje['imagen']; ?>" 
                         onclick="window.location.href = '../public/detalles_viajes.php?id=<?php echo $viaje['id_viaje']; ?>'" 
                         >

                    <div class="info">
                        <h3><?php echo $viaje['titulo']; ?></h3>

                        <p>
                            <?php echo $viaje['fecha_inicio']; ?> - 
                            <?php echo $viaje['fecha_final']; ?>
                        </p>

                        <p class="precio">
                            <?php echo $viaje['precio']; ?> €
                        </p>

                        <p class="tipo">
                            <?php echo $viaje['tipo_viaje']; ?>
                        </p>
                    </div>

                </div>

            <?php } ?>
            <a href="javascript:history.back()" class="btn-volver">Volver</a>

        </div>

    </body>
</html>
