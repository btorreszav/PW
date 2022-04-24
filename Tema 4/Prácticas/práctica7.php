<?php
$num_prac = "7";
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
      En un almacén se hace un 20% de descuento a los clientes cuya compra supere los $1000 ¿ Cual será la cantidad que pagará una persona por su compra?
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td>
              Ingrese la cantidad a pagar:
            </td>
            <td>
              <input type="text" name="pago" value="<?php
                echo isset($_POST["pago"]) && !empty($_POST["pago"]) ? $_POST["pago"] : "0.0";
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
        $pago = floatval($_POST["pago"]);
        echo "<p>
                El total a pagar es de: ".($pago <= 1000 ? $pago : ($pago * 0.8))."
              </p>";
      }
    ?>
  </body>
</html>
