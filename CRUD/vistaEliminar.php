<?php

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

// Recibir el id del usuario

$idUsuario = $_GET['id'];

// Eliminar al usuario

$sqlELim = "DELETE FROM lenguaje_usuario WHERE id_usuario = $idUsuario";
$stm = $conexion->prepare($sqlELim);
$stm->execute();

$sqlELim = "DELETE FROM usuarios WHERE id_usuario = $idUsuario";
$stm = $conexion->prepare($sqlELim);
$stm->execute();

echo "Registro eliminado con éxito";

?>