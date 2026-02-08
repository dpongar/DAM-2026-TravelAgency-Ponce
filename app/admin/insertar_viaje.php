<?php
include '../assets/CSS.php';
?>


<body>
    <section class="contenedor-insertar">
        <h1>Añadir Nuevo Safari</h1>
        <form action="../admin/procesar_insertar_viaje.php" method="POST" enctype="multipart/form-data">

            <div class="campo">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" class="input-texto"required>
            </div>

            <div class="campo">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" rows="5" class="input-texto" required></textarea>
            </div>

            <div class="campo-doble-i">
                <div>
                    <label for="fecha_inicio">Fecha Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="input-fecha" required>
                </div>
                <div>
                    <label for="fecha_final">Fecha Final:</label>
                    <input type="date" id="fecha_final" name="fecha_final"class="input-fecha" required>
                </div>
            </div>

            <div class="campo">
                <label for="precio">Precio (€):</label>
                <input type="number" id="precio" name="precio" class="input-numero" required>
            </div>
            <div class="campo">
                <label for="plazas">Plazas disponibles:</label>
                <input type="number" id="plazas" name="plazas" class="input-numero" required>
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
                <label for="imagen">Imagen del viaje:</label>
                <input type="file" name="imagen_archivo" id="imagen" class="input-texto" required>
            </div>
            <div class="campo">
                <label for="destacado">¿Es destacado?:</label>
                <select name="destacado">
                    <option value="1">Sí, mostrar en portada</option>
                    <option value="0">No, viaje normal</option>
                </select>
            </div>
            <div class="botones-form-i">
                <button type="submit" name="insertar" class="btn-guardar" onclick="return confirm('Viaje insertado correctamente');">Guardar Cambios </button>

                <a href="javascript:history.back()" class="btn-cancelar">Cancelar</a>
            </div>
        </form>
    </section>
</body>
