<?php
function conectarBaseDatos() {
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = '';
    $baseDatos = 'phpavanzado';

    $conexion_db = new mysqli($servidor, $usuario, $contrasena, $baseDatos);

    if ($conexion_db->connect_error) {
        die('Error de conexión: ' . $conexion_db->connect_error);
    }

    return $conexion_db;
}
?>
