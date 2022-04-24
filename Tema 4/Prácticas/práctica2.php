<?php
$num_prac = "2";
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
      En un hospital existen tres áreas: Ginecología, Pediatría y Traumatología.
      El presupuesto anual del hospital se reparte conforme a la sig. tabla:<br>
      Área Porcentaje del presupuesto<br>
      Ginecología ==>> 40%<br>
      Traumatología ==>> 30%<br>
      Pediatría ==>>30%<br>
      Obtener la cantidad de dinero que recibirá cada área, para cualquier monto presupuestal.
      </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td> Presupuesto Anual: </td>
            <td>
              <input type="text" name="presupuesto" value="<?php
                echo isset($_POST["presupuesto"]) && !empty($_POST["presupuesto"]) ? $_POST["presupuesto"] : "0.0";
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
        $general = floatval($_POST["presupuesto"]);
        $ginecología = $general * 0.4;
        $traumatología = $general * 0.3;
        $pediatría = $general * 0.3;

        $presupuestos = array("general", "ginecología", "traumatología", "pediatría");
        echo "<p>";
        foreach ($presupuestos as $key => $presupuesto) {
          echo "Presupuesto ".$presupuesto.": $".$$presupuesto."<br>";
        }
        echo "</p>";
      }
    ?>
  </body>
</html>
