<?php
$num_prac = "6";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prácticas de PHP</title>
    <style media="screen">
      table {
        border-collapse: collapse;
      }
      td, th {
        border: 1px solid #000;
        padding: 5px;
      }
      input {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Prácticas de PHP</h1>
    <h2>Práctica <?php echo $num_prac; ?></h2>
    <p>
      Determinar si un alumno aprueba a reprueba un curso, sabiendo que aprobará si su promedio de tres calificaciones es mayor o igual a 70; reprueba en caso contrario.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <?php
          for ($i=1; $i <= 3; $i++) {
            ?>
            <tr>
              <td>
                Calificación <?php echo $i; ?>:
              </td>
              <td>
                <input type="text" name="calif<?php echo $i; ?>" value="<?php
                  echo isset($_POST["calif".$i]) && !empty($_POST["calif".$i]) ? $_POST["calif".$i] : "0.0";
                ?>" size="10">
              </td>
            </tr>
            <?php
          }
          ?>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" name="submit" value="Enviar" style="margin-right:10%;">
              <input type="reset" value="Limpiar">
            </td>
          </tr>
        </form>
      </tbody>
    </table>
    <?php
      if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
        $suma = 0;
        for ($i=1; $i <= 3; $i++) {
          $suma += floatval($_POST["calif".$i]);
        }
        $prom = $suma / 3;
        echo "<p>
          Promedio de sus calificaciones = ".$prom."<br>
          ".($prom < 70 ? "Reprobado" : "Aprobado")."
        </p>";
      }
    ?>
  </body>
</html>
