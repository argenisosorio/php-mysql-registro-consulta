<!doctype html>
<html lang="en">
    <head>
        <title>Registros</title>
        <meta charset="UTF-8">
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <?php
        $conexion = mysql_connect("localhost","root","") or die ("¡No hay conexión!");
        $consulta = mysql_query("SELECT * FROM alumno", $conexion);
        mysql_select_db("registro", $conexion) or die ("¡No se pudo encontrar la base de datos!");
        $result = mysql_query("SELECT * FROM alumno", $conexion);
        echo "<table border = '1'> \n";
        echo "<tr> \n";
        echo "<td><b>id</b></td> \n";
        echo "<td><b>Nombre</></td> \n";
        echo "<td><b>Apellido</></td> \n";
        echo "<td><b>Cédula</></td> \n";	
        echo "</tr> \n";
        while ($row = mysql_fetch_array($result)) {
            echo "<tr> \n";
            echo "<td>$row[id]</td> \n";
            echo "<td>$row[nombre]</td> \n";
            echo "<td>$row[apellido]</td> \n";
            echo "<td>$row[cedula]</td> \n";
            echo "</tr> \n";
        }
        echo "</table> \n";
    ?>
</body>
</html>