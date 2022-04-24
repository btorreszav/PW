<?php
$num_prac = "4";
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
      Determine el área y el perímetro de un rectángulo, sabiendo que:<br>
      area = b x h<br>
      perimetro = 2 x (b + h)
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <tr>
            <td> Base: </td>
            <td>
              <input type="text" name="base" value="<?php
                echo isset($_POST["base"]) && !empty($_POST["base"]) ? $_POST["base"] : "0.0";
              ?>" size="10">
            </td>
          </tr>
          <tr>
            <td> Altura: </td>
            <td>
              <input type="text" name="altura" value="<?php
                echo isset($_POST["altura"]) && !empty($_POST["altura"]) ? $_POST["altura"] : "0.0";
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
        $base = floatval($_POST["base"]);
        $altura = floatval($_POST["altura"]);

        echo "<p>
          Base = ".$base." y Altura = ".$altura."<br>
          Área = ".($base * $altura)."<br>
          Perimetro = ".(2 * ($base + $altura))."<br>
        </p>";
      }
    ?>
  </body>
</html>
