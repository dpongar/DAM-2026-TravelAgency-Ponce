<?php
include '../clases/ConexionDatabase.php';

$conn = mysqli_connect("localhost", "root", "", "africa_safaris");
?>
<section class="destacados">
    <h2>Gestionar Los Viajes</h2>
    <div class="grid-viajes">
        <?php
        $sql = "SELECT * FROM Viajes";
        //Resultado envia la consulta a la base de datos 
        $resultado = mysqli_query($conn, $sql);

        //El while se repite por cada viaje destacado (true)
        while ($viaje = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="card-viaje">
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
                    </p>
                    <div class='botones'>
                        <a class='modificar' href="../admin/modificar_viaje.php?id=<?php echo $viaje['id_viaje']; ?>">
                            <?php echo '<button type = "button">Modificar</button>' ?>                        
                        </a>
                        <a class='eliminar' href="../admin/eliminar_viaje.php?id=<?php echo $viaje['id_viaje']; ?>" onclick="return confirm('¿Estas seguro de querer eliminar este viaje?');">                        
                            <?php echo '<button type = "button">Eliminar</button>' ?>
                        </a>
                        <a class='insertar' href="../admin/insertar_viaje.php?id=<?php echo $viaje['id_viaje']; ?>">                        
                            <?php echo '<button type = "button">Insertar</button>' ?>
                            
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>