<!doctype html>
<html lang="en">
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <?php
    if (array_key_exists('nombre',$_POST) and array_key_exists('apellido',$_POST) and array_key_exists('cedula',$_POST)
        and $_POST['nombre']!="" and $_POST['apellido']!="" and $_POST['cedula']!="") {
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $cedula=$_POST['cedula'];
            $conexion=mysql_connect("localhost","root","") or die ("¡No hay conexión!");
            mysql_select_db("registro",$conexion) or die ("¡No se pudo encontrar la base de datos!");
            $sql=mysql_query("INSERT INTO alumno(nombre,apellido,cedula) value('$nombre','$apellido','$cedula')",$conexion) or die ("¡No se pudo registrar!");
            echo "<h3>¡Registro exitoso!</h3>";
        }
        else  {
            echo "¡Faltaron datos, no se realizo el registro!";
        }
    ?>
</body>
</html>