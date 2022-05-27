<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <title>Registro</title>
    </head>
    <body>
        <form action="Registro.php" method="POST">
            <table class="tabla_general">
                <thead>
                    <th>
                        <h1>
                            Suscripción electrónica a nuestro boletín
                        </h1>
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td class="alinear_contenido_celda_centro">
                            Nota: Este es un formulario de ejemplo en el que los datos aquí escritos se trasladan a otra página.
                        </td>
                    </tr>
                    <tr>
                        <td class="contenido_celda_con_espaciado">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="alinear_contenido_celda_derecha">
                                            Nombre:
                                        </td>
                                        <td colspan="2">
                                            <input class="inputs_texto" name="Nombre" type="text" value="">
                                        </td>
                                        <td class="alinear_contenido_celda_derecha">
                                            Apellidos:
                                        </td>
                                        <td colspan="2">
                                            <input class="inputs_texto" name="Apellidos" type="text" value="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="alinear_contenido_celda_derecha">
                                            e-mail:
                                        </td>
                                        <td colspan="2">
                                            <input class="inputs_texto" name="Email" type="text" value="">
                                        </td>
                                        <td class="alinear_contenido_celda_derecha">
                                            Contraseña:
                                        </td>
                                        <td colspan="2">
                                            <input class="inputs_texto" name="Contraseña" type="text" value="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="contenido_celda_con_espaciado">
                            <table class="tabla_opciones">
                                <tbody>
                                    <td>
                                        Sexo
                                        <br>
                                        <input name="Sexo" type="radio" value="Hombre">Hombre
                                        <br>
                                        <input name="Sexo" type="radio" value="Mujer">Mujer
                                    </td>
                                    <td>
                                        Nivel de estudios
                                        <br>
                                        <input name="Nivel" type="radio" value="Certificado escolar">Certificado escolar
                                        <br>
                                        <input name="Nivel" type="radio" value="Graduado en E.S.O">Graduado en E.S.O
                                        <br>
                                        <input name="Nivel" type="radio" value="Bachillerato">Bachiller - Formación Profesional
                                        <br>
                                        <input name="Nivel" type="radio" value="Diplomado">Diplomado
                                        <br>
                                        <input name="Nivel" type="radio" value="Licenciado o Doctorado">Licenciado o Doctorado
                                        <br>
                                    </td>
                                    <td>
                                        Interesado en los siguientes temas:
                                        <br>
                                        <input name="Interesado[]" type="checkbox" value="Música">Música
                                        <br>
                                        <input name="Interesado[]" type="checkbox" value="Deportes">Deportes
                                        <br>
                                        <input name="Interesado[]" type="checkbox" value="Cine">Cine
                                        <br>
                                        <input name="Interesado[]" type="checkbox" value="Libros">Libros
                                        <br>
                                        <input name="Interesado[]" type="checkbox" value="Ciencia">Ciencia
                                        <br>
                                    </td>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="contenido_celda_con_espaciado">
                            Dia de la semana que le interesa recibirlo:
                            <br>
                            <select name="List">
                                <option value="No seleccionó día">Seleccione un día</option>
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miercoles">Miercoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                                <option value="Sábado">Sábado</option>
                                <option value="Domingo">Domingo</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="tabla_general">
                <tbody>
                    <tr>
                        <td class="contenido_celda_con_espaciado">
                            Su opinión
                            <br>
                            <textarea class="inputs_texto" name="Comentario" rows="4" cols="60" placeholder="Comentario..."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="contenido_celda_con_espaciado">
                            <input class="boton" name="Comprobar" type="submit" value="Comprobar el formulario">
                            <input class="boton" type="reset" value="Borrar todo">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
