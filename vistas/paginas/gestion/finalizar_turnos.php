<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../login.php');
    exit();
}

include('conexion.php');
$conexion_db = conectarBaseDatos(); 
$id_producto = $_GET['id'];

mysqli_query($conexion_db, "UPDATE cliente SET estado='finalizado' WHERE id=$id_producto");

mysqli_close($conexion_db);

header("Location: ../ver_turnos.php");
?>