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
        if(array_key_exists('id',$_GET) and $_GET['id']!="") {
            $id_registro=$_GET['id'];
            $link = mysql_connect("localhost", "root", "");
            mysql_select_db("registro", $link);
            mysql_query("DELETE FROM alumno WHERE id = $id_registro", $link) or die ("<h3>¡No se elimino el registro!</h3>");
            echo "<h3>¡Registro eliminado!</h3>";
        }
    ?>
</body>
</html>