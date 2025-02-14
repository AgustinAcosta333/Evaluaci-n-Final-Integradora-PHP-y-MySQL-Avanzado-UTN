<?php
    $num1 = rand(0, 9);
    $num2 = rand(0, 9);
    $num3 = rand(0, 9);
    $letras = array('a', 'k', 'o', 'f', 'l', 'r', 'j');
    $simbolo = array('$', '/', '!', '%', '&');
    $mezclar_letras = rand(0, 6);
    $mezclar_simbolos = rand(0, 4);

    $codigo_captcha = $num1 . $letras[$mezclar_letras] . $num2 . $simbolo[$mezclar_simbolos] . $num3;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Generar turno</title>
    <link rel="stylesheet" type="text/css" href="css/realizar_turno.css">
</head>
<body>
    <header>
        <h1>Taller Mecánico</h1>
        <button> <a href="/">Inicio</a> </button>
        <button> <a href="ver_turnos.php">Ver turnos</a> </button>
        <button> <a href="gestion/cerrar_sesion.php">Cerrar sesión</a> </button>
    </header>
    <div class="seccion">
        <h2>Sistema de administración de turnos</h2>
    </div>
    <div class="container">
        <div class="form-container">
            <h3>¡Bienvenido!</h3>
            <form action="gestion/cargar_turno.php" method="POST" class="formulario" enctype="multipart/form-data">

                <input type="text" name="nombre" placeholder="Por favor, ingrese su nombre">
                <input type="email" name="correo" placeholder="usuario@correo.org">
                <input type="tel" name="telefono" placeholder="11XXXXXXXX">
                <input type="text" name="modelo" placeholder="Ej: Fiat Siena 1.4 Fire">

                <select name="servicio">
                    <option value="frenos">Frenos</option>
                    <option value="scanneo">Scanneo</option>
                    <option value="lubricantes">Cambio de lubricantes</option>
                    <option value="transmision">Transmisión</option>
                    <option value="chapa_pintura">Chapa y pintura</option>
                    <option value="suspension">Suspensión</option>
                    <option value="motor">Reparación de motor</option>
                    <option value="electricidad">Electricidad vehicular</option>
                    <option value="aire_acondicionado">Aire acondicionado</option>
                    <option value="alineado_balanceo">Alineado y balanceo</option>
                </select>

                <img src="gestion/captcha.php?codigo=<?php echo $codigo_captcha; ?>" alt="Captcha">

                <input type="text" name="captcha" placeholder="Ingrese el texto de la imagen.">

                <input type="submit" value="Realizar turno">
            </form>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'campos_vacios') {
                        echo "<h3>Por favor, complete todos los campos.</h3>";
                    } elseif ($_GET['error'] == 'correo_invalido') {
                        echo "<h3>Por favor, ingrese un correo electrónico válido.</h3>";
                    }
                }
                if (isset($_GET['ok'])) {
                    echo "<h3>Su turno fue realizado con éxito.</h3>";
                }
            ?>

        </div>
    </div>
</body>
</html>
