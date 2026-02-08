<?php
include '../clases/ConexionDatabase.php';

$conn = mysqli_connect("localhost", "root", "", "africa_safaris");
?>
<section class="destacados">
    <h2>Todos los viajes</h2>
    <div class="grid-viajes">
        <?php
        $sql = "SELECT * FROM Viajes";
        $resultado = mysqli_query($conn, $sql);
        while ($viaje = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="card-viaje" onclick="window.location.href = '../public/detalles_viajes.php?id=<?php echo $viaje['id_viaje']; ?>'">
                <img src="<?php echo $viaje['imagen']; ?>" alt="<?php echo $viaje['titulo']; ?>">
                <div class="info-viaje">
                    <h3><?php echo $viaje['titulo']; ?></h3>
                    <p class="descripcion"><?php echo $viaje['descripcion']; ?></p>
                    <p class="fecha">
                        <?php echo $viaje['fecha_inicio'] . " / " . $viaje['fecha_final']; ?>
                    </p>
                    <p class="precio">
                        <?php echo $viaje['precio']; ?> €
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>