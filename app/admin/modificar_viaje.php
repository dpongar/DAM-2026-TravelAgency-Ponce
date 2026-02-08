<?php
include '../admin/procesar_modificar_viaje.php';
include '../assets/CSS.php';
?>
<title>Modificar Viaje</title>

<body>
    <section class="contenedor-formulario">
        <h2>Modificar Viaje: <?php echo $viaje['titulo']; ?></h2>

        <form action="../admin/procesar_modificar_viaje.php" method="POST" class="form-viajes" enctype="multipart/form-data">
            <input type="hidden" name="id_viaje" value="<?php echo $viaje['id_viaje']; ?>">

            <div class="campo">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $viaje['titulo']; ?>" class="input-texto" required>
            </div>

            <div class="campo">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="5" class="input-texto" required><?php echo $viaje['descripcion']; ?></textarea>
            </div>

            <div class="campo-doble-m">
                <div>
                    <label for="fecha_inicio">Fecha Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" value="<?php echo $viaje['fecha_inicio']; ?>" class="input-fecha" required>
                </div>
                <div>
                    <label for="fecha_final">Fecha Final:</label>
                    <input type="date" id="fecha_final" name="fecha_final" value="<?php echo $viaje['fecha_final']; ?>" class="input-fecha" required>
                </div>
            </div>

            <div class="campo">
                <label for="plazas">Plazas disponibles:</label>
                <input type="number" id="plazas" name="plazas" class="input-numero" value="<?php echo $viaje['plazas']; ?>" >
            </div>
            <div class="campo">
                <label for="destacado">¿Es destacado?:</label>
                <select name="destacado">
                    <option value="1">Sí, mostrar en portada</option>
                    <option value="0">No, viaje normal</option>
                </select>
            </div>
               <div class="campo">
                <label for="tipo_viaje">Tipo de viaje:</label>
                <select name="tipo_viaje">
                    <option value="Naturaleza">Naturaleza</option>
                    <option value="Cultural">Cultural</option>
                    <option value="Experiencial">Experiencial</option>
                    <option value="Familiar">Familiar</option>
                    <option value="Fotográfico">Fotográfico</option>
                    <option value="Safari">Safari</option>
                </select>
            </div>
            <div class="campo">
                <label for="precio">Precio (€):</label>
                <input type="number" id="precio" name="precio" value="<?php echo $viaje['precio']; ?>" class="input-numero" required>
            </div>
           <div class="campo">
                <label for="imagen">Imagen del viaje:</label>
                <input type="file" name="imagen_archivo" placeholder="nombre_archivo.jpg" class="input-texto" value="<?php echo $viaje['imagen']; ?>" >
            </div>

            <div class="botones-form">
                <button type="submit" name="actualizar" class="btn-guardar" onclick="return confirm('Viaje actualizado correctamente');">Guardar Cambios </button>

                <a href="javascript:history.back()" class="btn-cancelar">Cancelar</a>
            </div>
        </form>
    </section>

</body>