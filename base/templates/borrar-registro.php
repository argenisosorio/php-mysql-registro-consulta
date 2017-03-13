<!doctype html>
<html lang="en">
    <head>
        <title>Borrar un Registro</title>
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
        while ($row = mysql_fetch_array($result))
        {
          echo "<tr> \n";
          echo "<td>$row[id]</td> \n";
          echo "<td>$row[nombre]</td> \n";
          echo "<td>$row[apellido]</td> \n";
          echo "<td>$row[cedula]</td> \n";
          echo "</tr> \n";
        }
        echo "</table> \n";
    ?>
    <br />
    <form action="borrar-registro.php" method="post">
        id de registro a borrar: <input type="text" name="id" required>
        <p />
        <input type="submit" value="Borrar">
        <input type="reset" value="Limpiar">
    </form>
    <?php
        if(array_key_exists('id',$_POST) and $_POST['id']!="") {
            $id_registro=$_POST['id'];
            $link = mysql_connect("localhost", "root", "");
            mysql_select_db("registro", $link);
            mysql_query("DELETE FROM alumno WHERE id = $id_registro", $link) or die ("<h3>¡No se elimino el registro!</h3>");
            echo "<h3>¡Registro eliminado!</h3>";
        }
    ?>
</body>
</html>