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
    <form action="actualizar-registro.php" method="post">
        id del registro a actualizar: <input type="text" name="id" required>
        <p />
        <p />
        Campo a actualizar:
        <select name="var_select">
          <option value="nombre">nombre</option>
          <option value="apellido">apellido</option>
          <option value="cedula">cedula</option>
        </select>
        <p />
        Dato: <input type="text" name="dato" required>
        <p />
        <input type="submit" value="Actualizar">
        <input type="reset" value="Limpiar">
    </form>
    <?php        
        if(array_key_exists('id',$_POST) and array_key_exists('var_select',$_POST) and array_key_exists('dato',$_POST)
            and $_POST['id']!="" and $_POST['var_select']!="" and $_POST['dato']!="") {
            $id=$_POST['id'];
            $var_select=$_POST['var_select'];
            $dato=$_POST['dato'];
            $link = mysql_connect("localhost","root","") or die ("¡No hay conexión!");
            mysql_select_db("registro",$conexion) or die ("¡No se pudo encontrar la base de datos!");
            $result = mysql_query("UPDATE alumno SET $var_select = '$dato' WHERE id = $id", $link);
            echo "<h3>¡Registro actualizado!<h3>";
        }
    ?>
</body>
</html>