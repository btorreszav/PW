<?php
$num_prac = "9";
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
      Pedir el radio de un círculo y calcular su área.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td>
              Introduce el radio del circulo:
            </td>
            <td>
              <input type="text" name="radio" value="<?php
                echo isset($_POST["radio"]) && !empty($_POST["radio"]) ? $_POST["radio"] : "0.0";
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
        $radio = floatval($_POST["radio"]);
        echo "<p>
              El área del circulo es: ".(pi() * ($radio**2))."
              </p>";
      }
    ?>
  </body>
</html>
