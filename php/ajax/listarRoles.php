<?php
require_once '../conexion.php';
session_start();
$conexion = new Conexion();  // iniciamos la conexion
//datos que se envian a la base de datos
$sql = "CALL listarRoles()";
$estado = $conexion->prepare($sql);
$resultado = $estado->execute();

while ($registros = $estado->fetch()) {
    echo "<option value=". strtolower($registros['idrol']) .">".strtolower($registros["rol_descripcion"])."</option>";
}

$conexion = null;