<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Resultados</title>
    </head>
    <body>
        <?php
            $nombre = $_POST["Nombre"];
            $apellidos = $_POST["Apellidos"];
            $email = $_POST["Email"];
            $contraseña = $_POST["Contraseña"];
            $sexo = $_POST["Sexo"];
            $nivelEstudios = $_POST["Nivel"];
            $TemasInteres = $_POST["Interesado"];
            $DiaSemana = $_POST["List"];
            $Opinion = $_POST["Comentario"];
            ?>
        <table>
            <thead>
                <th>
                    Resultados ingresados
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                            echo "Nombre completo: ".$nombre." ".$apellidos;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Email: ".$email;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Contraseña: ".md5($contraseña);
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Sexo: ".$sexo;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Nivel de estudios: ".$nivelEstudios;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo "Temas de interes:";
                        foreach ($TemasInteres as $key => $value) {
                            ?><br><?php
                            echo "- ".$value;
                        }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Dia de la semana: ".$DiaSemana;
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "Opinion: ".$Opinion;
                            ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
