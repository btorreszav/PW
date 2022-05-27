<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Funciones, parametros por referencia</title>
    </head>
    <body>
        <?php
        function inc(&$x){
            $x++;
        }
        $a = 1;
        echo $a;
        echo "<br>";
        echo "Incrementar";
        echo "<br>";
        inc($a);
        echo $a;
        echo "<br>";
        function intercambiar(&$x, &$y){
            $temp = $x;
            $x = $y;
            $y = $temp;
        }
        $a = 1;
        $b = 2;
        echo "<br>";
        echo "a:".$a;
        echo "<br>";
        echo "b:".$b;
        echo "<br>";
        echo "Intercambiar:";
        intercambiar($a, $b);
        echo "<br>";
        echo "a:".$a;
        echo "<br>";
        echo "b:".$b;
         ?>
    </body>
</html>
