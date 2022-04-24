<?php
$num_prac = "10";
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
      Pedir tres números y mostrarlos ordenados de mayor a menor.
    </p>
    <table>
      <tbody>
        <form name="form" action="práctica<?php echo $num_prac; ?>.php" method="post">
          <?php
          for ($i=1; $i <= 3; $i++) {
            ?>
            <tr>
              <td>
                Numero <?php echo $i; ?>:
              </td>
              <td>
                <input type="text" name="num<?php echo $i; ?>" value="<?php
                  echo isset($_POST["num".$i]) && !empty($_POST["num".$i]) ? $_POST["num".$i] : "0.0";
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
      $numeros = array();
      for ($i=1; $i <= 3; $i++) {
        $numeros[$i] = floatval($_POST["num".$i]);
      }
      arsort($numeros);
      echo "<p>Datos ordenados:<br>";
      foreach ($numeros as $key => $numero) {
        echo $numero."<br>";
      }
      echo "</p>";
    }
    ?>
  </body>
</html>
