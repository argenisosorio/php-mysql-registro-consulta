<!doctype html>
<html lang="en">
    <head>
        <title>Borrar Registros</title>
        <meta charset="UTF-8">
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <?php
        $link = mysql_connect("localhost", "root", "") or die ("¡No hay conexión!");
        mysql_select_db("registro",$link) or die ("¡No se pudo encontrar la base de datos!");
        mysql_query("TRUNCATE TABLE alumno", $link);
        mysql_close($link); // Cerrar la conexión con la base de datos
    ?>
    <h3>¡Todos los registros fueron eliminados!</h3>
</body>
</html>