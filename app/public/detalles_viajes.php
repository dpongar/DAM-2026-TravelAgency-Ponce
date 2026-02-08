
<?php
include '../admin/procesar_detalles.php';
include '../assets/CSS.php';
?>
<title><?php echo $viaje['titulo']; ?></title>

<body>
<section class="contenedor-viaje">

    <h1><?php echo $viaje['titulo']; ?></h1>

    <img src="<?php echo $viaje['imagen']; ?>" alt="Imagen del viaje">

    <p><strong>Descripción:</strong></p>
    <p><?php echo $viaje['descripcion']; ?></p>

    <p><strong>Fechas:</strong>
        <?php echo $viaje['fecha_inicio']; ?> -
        <?php echo $viaje['fecha_final']; ?>
    </p>

    <p><strong>Plazas disponibles:</strong>
        <?php echo $viaje['plazas']; ?>
    </p>

    <p><strong>Tipo de viaje:</strong>
        <?php echo $viaje['tipo_viaje']; ?>
    </p>

    <p><strong>Precio:</strong>
        <?php echo $viaje['precio']; ?> €
    </p>

    <?php if ($viaje['destacado']) : ?>
        <p class="destacado-detalles">Viaje destacado</p>
    <?php endif; ?>

    <a href="javascript:history.back()" class="btn-volver">Volver</a>

</section>
</body>
