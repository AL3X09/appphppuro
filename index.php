<?php
require_once "modelos/modelo.php";

$modelo= new modelo();
$list_usuarios = $modelo->getDatos();
$put_usuario = $modelo->putUsuario($_POST["nombre"]);
//print_r($list_usuarios);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Aplicaione Pruebas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="container"> 
        <div class="row">
            <h2>Aplicacion de Prueba</h2>            
        </div>
        <div class="row">
            <form action="index.php" method="post" >
                <input type="text" name="nombre">
                <input type="submit"  value="enviar">
            </form>    
        </div>

        <select>
            
        </select>
     </div>
        
    </body>
</html>