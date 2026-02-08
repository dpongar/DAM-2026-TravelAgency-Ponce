<ul>
    <li><a href="../public/index.php">Home</a></li>
    <li><a href="../public/viajes.php">Viajes</a></li>
    <li><a href="../public/login.php">Iniciar Sesión</a></li>
    <li><a href="../public/register.php">Registrate</a></li>
    <li class="nav-buscador">
        <form method="GET" action="../public/buscar.php" class="form-nav-busqueda">
            <input type="text" name="destino" placeholder="Buscar destino">
            <input type="date" name="fecha">
            <select name="tipo">
                <option value="">Tipo</option>
                <option value="Safari">Safari</option>
                <option value="Cultural">Cultural</option>
                <option value="Naturaleza">Naturaleza</option>
                <option value="Experiencial">Experiencial</option>
                <option value="Familiar">Familiar</option>
                <option value="Fotográfico">Fotográfico</option>
            </select>
            <button type="submit">Buscar</button>
        </form>
    </li>
</ul>
