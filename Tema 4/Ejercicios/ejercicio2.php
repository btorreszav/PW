<html lang="en">
    <!--El header se utiliza principalmente para establecer elementos no visibles para el usuario sino para el programador y importar otros tipos de documentos--> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/510/PNG/512/at_icon-icons.com_50456.png">
        <title>Document</title>
    </head>
    <!-- Etiqueta para mostrar contenido en nuestra pagina, sitio o aplicacion web-->
    <body>
        <h1>Tablas de multiplicar</h1>
        <?php
            for ($tabla=1; $tabla <= 10; $tabla++) { 
                for ($i = 1; $i <= 10; $i++) {
        ?>
        <font size = 5>
        <?php
                    $resultado = $tabla * $i;
                    echo $tabla." x ".$i." = ".$resultado;
        ?>
        </font>
        <br>
        <?php
                }
        ?>
        <br>
        <?php
            }
        ?>
        <br>
        
        <h1>Tablas de multiplicar</h1>
        <?php
            for ($tabla=1; $tabla <= 10; $tabla++) { 
                for ($i = 1; $i <= 10; $i++) { 
                    $resultado = $tabla * $i;
                    echo "<font size = 5>";
                    echo $tabla." x ".$i." = ".$resultado;
                    echo "</font>";
                    echo "<br>";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>