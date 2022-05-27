<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="servidor.php" method="post">
            Tipo de Coche
            <br>
            <input type="radio" name="coche" value="opel">opel
            <br>
            <input type="radio" name="coche" value="renault">renault
            <br>
            <input type="radio" name="coche" value="seat">seat
            <br>
            <br>

            Opciones Adicionales
            <br>
            <input type="checkbox" name="opciones[]" value="climatizador" checked>climatizador
            <br>
            <input type="checkbox" name="opciones[]" value="elevalunas">elevalunas
            <br>
            <input type="checkbox" name="opciones[]" value="CD">CD
            <br>
            <br>

            <select name="color">
                <option value="Rojo">Rojo</option>
                <option value="Verde">Verde</option>
                <option value="Azul">Azul</option>
            </select>
            <br>
            <br>

            <select multiple name="idiomas[]">
                <option value="Frances">Frances</option>
                <option value="Aleman">Aleman</option>
                <option value="Holandes">Holandes</option>
            </select>
            <br>
            <br>

            <textarea name="comentario" rows="4" cols="50">
                Este libro me parece...
            </textarea>

            <br>
            <input type="submit" value="Aceptar">
        </form>
    </body>
</html>
