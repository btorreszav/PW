<?php
$num_prac = "5";
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
      Un maestro desea saber que porcentaje de hombres y que porcentaje de mujeres hay en un grupo de estudiantes.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td> Número de Hombres: </td>
            <td>
              <input type="text" name="hom" value="<?php
                echo isset($_POST["hom"]) && !empty($_POST["hom"]) ? $_POST["hom"] : "0.0";
              ?>" size="10">
            </td>
          </tr>
          <tr>
            <td> Número de Mujeres: </td>
            <td>
              <input type="text" name="muj" value="<?php
                echo isset($_POST["muj"]) && !empty($_POST["muj"]) ? $_POST["muj"] : "0.0";
              ?>" size="10">
            </td>
          </tr>
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
        $hom = floatval($_POST["hom"]);
        $muj = floatval($_POST["muj"]);
        $total = ($hom + $muj);
        echo "<p>
          Total de personas = ".$total."<br>
          Porcentaje de hombres = ".(($hom / $total) * 100)."%<br>
          Porcentaje de mujeres = ".(($muj / $total) * 100)."%<br>
        </p>";
      }
    ?>
  </body>
</html>
