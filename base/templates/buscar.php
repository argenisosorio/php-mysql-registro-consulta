<!doctype html>
<html lang="en">
    <head>
        <title>Buscar</title>
        <meta charset="UTF-8">
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <form action="buscar.php" method="post">
        Seleccione campo para buscar:
        <select name="var_select">
          <option value="id">id</option>
          <option value="nombre">nombre</option>
          <option value="apellido">apellido</option>
          <option value="cedula">cedula</option>
        </select>
        <br />
        <br />
        Dato: <input type="text" name="dato" required>
        <br />
        <br />
        <input type="submit" value="Buscar">
        <input type="reset" value="Limpiar">
    </form>
	<?php
        if(array_key_exists('var_select',$_POST) and array_key_exists('dato',$_POST)
            and $_POST['var_select']!="" and $_POST['dato']!="") {
            $var_select=$_POST['var_select'];
            $dato=$_POST['dato'];
            $link = mysql_connect("localhost","root","") or die ("¡No hay conexión!");
            mysql_select_db("registro", $link);
            $result = mysql_query("SELECT * FROM alumno WHERE $var_select = '$dato'", $link);
            echo "<h3>El resultado es:</h3> </ p>";
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
        }
    ?>
</body>
</html>