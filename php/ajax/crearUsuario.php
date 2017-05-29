<?php
require_once '../conexion.php';
session_start();
$conexion = new Conexion();  // iniciamos la conexion
//datos que se envian a la base de datos
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$fecha = strlen($_POST['fecha']);
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];
$genero = $_POST['genero'];
$actual = new DateTime("now");
$calculo = $actual - $_POST['fecha'];
$fecha = $calculo;
$tipo = 3;
if ($fecha < 10) {
    $tipo = 1;
} else if ($fecha < 18) {
    $tipo = 2;
}
$sql = "CALL insertarUsuarioAdmin(" . $nombre . "," . $apellido . "," . $correo . "," . $fecha . "," . $usuario . "," . $telefono . "," . $pass . "," . $genero . "," . $pais . "," . $ciudad . "," . $tipo . ")";
$estado = $conexion->prepare($sql);
$estado->bindParam(":idusuario", $idusua);
$estado->bindParam(":nombre", $nombre);
$estado->bindParam(":apellido", $apellido);
$estado->bindParam(":telefono", $telefono);
$estado->bindParam(":correo", $correo);
$estado->bindParam(":fecha", $fecha);
$estado->bindParam(":pais", $pais);
$resultado = $estado->execute();
echo $resultado;

$conexion = null;


?>