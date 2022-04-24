<?php
$num_prac = "1";
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
      Dada una cantidad en pesos, obtener la equivalencia en dólares,
      asumiendo que la unidad de cambio es un dato desconocido.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td> Cantidad de Pesos: </td>
            <td>
              <input type="text" name="pesos" value="<?php
                echo isset($_POST["pesos"]) && !empty($_POST["pesos"]) ? $_POST["pesos"] : "0.0";
              ?>" size="10">
            </td>
          </tr>
          <tr>
            <td> Cotización del dolar: </td>
            <td>
              <input type="text" name="dolar" value="<?php
                echo isset($_POST["dolar"]) && !empty($_POST["dolar"]) ? $_POST["dolar"] : "0.0";
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
        $pesos = floatval($_POST["pesos"]);
        $costo_dolar = floatval($_POST["dolar"]);
        $dolares = $pesos / $costo_dolar;
        echo "$".$pesos." pesos es igual a $".$dolares." dolares";
      }
    ?>
  </body>
</html>
