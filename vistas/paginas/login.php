<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <header>
        <h1>Taller Mecánico</h1>
        <button> <a href="/">Inicio</a> </button>
        <button> <a href="realizar_turno.php">Solicitar turno</a> </button>
        <button> <a href="ver_turnos.php">Ver turnos</a> </button>
    </header>
    <h2>Sistema de ingreso de administradores</h2>
        <div class="container">
            <div class="form-container">
                <h3>Login</h3>
                <form action="gestion/validar.php" method="POST">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <input type="submit" value="Iniciar sesión">
                </form>
                <?php
                    if(isset($_GET['error'])){
                        echo "<h3>Datos incorrectos.</h3>";
                    }
                ?>
            </div>
        </div>
</body>
</html>