<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Funciones, Argumentos por defecto</title>
    </head>
    <body>
        <?php
        function mostrarNombre($nombre, $titulo = "Sr."){
            echo "Estimado ".$titulo." ".$nombre." <br>";
        }
        mostrarNombre("Fernandez");
        mostrarNombre("Fernandez", "Prof.");
         ?>
    </body>
</html>
