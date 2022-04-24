<?php
$num_prac = "8";
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
      Leer 2 números; si son iguales, que los multiplique; si el primero es mayor que el segundo, que los reste y si no, que los sume.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td>
              Numero 1:
            </td>
            <td>
              <input type="text" name="num1" value="<?php
                echo isset($_POST["num1"]) && !empty($_POST["num1"]) ? $_POST["num1"] : "0.0";
              ?>" size="10">
            </td>
          </tr>
          <tr>
            <td>
              Numero 2:
            </td>
            <td>
              <input type="text" name="num2" value="<?php
                echo isset($_POST["num2"]) && !empty($_POST["num2"]) ? $_POST["num2"] : "0.0";
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
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        echo "<p>";
        if ($num1 == $num2) {
          echo $num1." x ".$num2." = ".($num1 * $num2);
        } elseif ($num1 > $num2){
          echo $num1." - ".$num2." = ".($num1 - $num2);
        } else {
          echo $num1." + ".$num2." = ".($num1 + $num2);
        }
        echo "</p>";
      }
    ?>
  </body>
</html>
