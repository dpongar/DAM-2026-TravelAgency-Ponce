<?php

include "../clases/ConexionDatabase.php";

//Recoge los datos
$destino = $_GET['destino'] ?? ''; //?? --> si no existe usa una cadena vacia
$fecha   = $_GET['fecha'] ?? '';
$tipo    = $_GET['tipo'] ?? '';

$where = "WHERE 1=1"; //Permite concatenar luego con el AND sin preocuparme de poner WHERE en todos los campos.
$params = [];

if (!empty($destino)) {
    $where .= " AND titulo LIKE :destino";
    // Ahora $where vale: "WHERE 1=1 AND titulo LIKE :destino"
    $params[':destino'] = "%$destino%"; //El porcentaje te permite buscar una palabra que coincida en el titulo del viaje
}

if (!empty($fecha)) {
    $where .= " AND fecha_inicio <= :fecha 
                AND fecha_final >= :fecha";
    $params[':fecha'] = $fecha;
}

if (!empty($tipo)) {
    $where .= " AND tipo_viaje = :tipo";
    $params[':tipo'] = $tipo;
}

//Aqui se junta todo lo que se haya rellenado arriba
$sql = "SELECT * FROM Viajes $where";
//SE evita inyeccion SQL
$stmt = $conn->prepare($sql);

//Rellena los valores reales
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}

$stmt->execute();

?>
