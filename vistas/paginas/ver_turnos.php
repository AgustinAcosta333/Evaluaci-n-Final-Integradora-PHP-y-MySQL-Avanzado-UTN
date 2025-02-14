<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link rel="stylesheet" href="css/ver_turnos.css">
</head>
<body>
    <header>
        <h1>Taller Mecánico</h1>
        <button> <a href="/">Inicio</a> </button>
        <button> <a href="realizar_turno.php">Solicitar turno</a> </button>
        <button> <a href="gestion/cerrar_sesion.php">Cerrar sesión</a> </button>
    </header>

    <section class="contenedor_turnos">
        <?php include('gestion/conexion.php');
            $conexion_db = conectarBaseDatos();
            $consulta = mysqli_query($conexion_db, "SELECT * FROM cliente");
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Modelo</th>
                    <th>Servicio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar_turno = mysqli_fetch_assoc($consulta)) { ?>
                <tr>
                    <td><?php echo $mostrar_turno['nombre']; ?></td>
                    <td><?php echo $mostrar_turno['correo']; ?></td>
                    <td><?php echo $mostrar_turno['telefono']; ?></td>
                    <td><?php echo $mostrar_turno['modelo']; ?></td>
                    <td><?php echo $mostrar_turno['servicio']; ?></td>
                    <td><?php echo $mostrar_turno['estado']; ?></td>
                    <td>
                        <a href="gestion/aprobar_turnos.php?id=<?php echo $mostrar_turno['id']; ?>" class="btn">Aprobar</a>
                        <a href="gestion/procesar_turnos.php?id=<?php echo $mostrar_turno['id']; ?>" class="btn">Procesar</a>
                        <a href="gestion/finalizar_turnos.php?id=<?php echo $mostrar_turno['id']; ?>" class="btn">Finalizar</a>
                        <a href="gestion/cancelar_turnos.php?id=<?php echo $mostrar_turno['id']; ?>" class="btn">Cancelar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php mysqli_close($conexion_db); ?>
    </section>
</body>
</html>
