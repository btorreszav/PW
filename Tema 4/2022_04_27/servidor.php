<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Tipo de coche: <br>".(isset($_POST["coche"])?$_POST["coche"]:"Sin especificar");
        ?>
        <br>
        <br>
        <?php
        echo "Adicionales:";
        ?>
        <br>
        <?php
        foreach ($_POST["opciones"] as $key => $value) {
            echo $value;
            ?>
            <br>
            <?php
        }
        ?>
        <br>
        <?php
        echo "Color:".$_POST["color"];
        ?>
        <br>
        <br>
        <?php
        echo "Idiomas:";
        ?>
        <br>
        <?php
        foreach ($_POST["idiomas"] as $key => $value) {
            echo $value;
            ?>
            <br>
            <?php
        }
        ?>
    </body>
</html>
