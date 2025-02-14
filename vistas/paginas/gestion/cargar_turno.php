<?php 
// Verificación de campos del formulario
$nombre_usuario = $_POST['nombre'];
$mail = $_POST['correo'];
$tel_num = $_POST['telefono'];
$auto = $_POST['modelo'];
$atencion = $_POST['servicio'];
$estado = 'enviado';

if (empty($nombre_usuario) || empty($mail) || empty($tel_num) || empty($auto) || empty($atencion) || empty($estado)) {
    header("Location: realizar_turno.php?error=campos_vacios");
    exit();
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    header("Location: realizar_turno.php?error=correo_invalido");
    exit();
} else {
    include('conexion.php'); 
    $conexion_db = conectarBaseDatos();
    mysqli_query($conexion_db, "INSERT INTO cliente VALUES (DEFAULT, '$nombre_usuario', '$mail', '$tel_num', '$auto', '$atencion', '$estado')");
    mysqli_close($conexion_db);
    header("Location: ../realizar_turno.php?ok");
    exit();
}
?>
