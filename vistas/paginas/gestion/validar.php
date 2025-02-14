<?php
session_start();
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

include('conexion.php');

// Obtener la conexión
$conexion_db = conectarBaseDatos();

// Verificar la conexión
if (!$conexion_db) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Realizar la consulta
$consulta = mysqli_query($conexion_db, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'");

// Verificar las credenciales
if (mysqli_num_rows($consulta) > 0) {
    $_SESSION['admin'] = $usuario;
    header('Location: ../realizar_turno.php');
} else {
    header('Location: ../login.php?error');
}
?>