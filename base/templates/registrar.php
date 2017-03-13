<!doctype html>
<html lang="en">
    <head>
        <title>Inicio - Registrar</title>
        <meta charset="UTF-8">
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <form action="datos.php" method="post">
        Nombre: <input type="text" name="nombre" required>
        <p />
        Apellido: <input type="text" name="apellido" required>
        <p />
        Cédula: <input type="text" name="cedula" required>
        <p />
        <input type="submit" value="Registrar">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>