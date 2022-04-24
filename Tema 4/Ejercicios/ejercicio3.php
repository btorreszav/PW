<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conversión dólares/pesos</title>
    <style media="screen">
      body {
        margin: 0;
      }

      h1 {
        text-align: center;
      }

      table {
        border-collapse: collapse;
      }

      table, td, th {
        border: 1px solid;
      }
    </style>
  </head>
  <body>
    <h1>Conversión dólares/pesos</h1>
    <center>
      <table>
        <colgroup>
          <?php
            /*
            echo "<col style=\"background-color:red\">
            <col style=\"background-color:yellow\">";
            echo "<col style='background-color:red'>
            <col style='background-color:yellow'>";
            echo '<col style="background-color:red">
            <col style="background-color:yellow">';
            */
          ?>
          <col style="background-color:red">
          <col style="background-color:yellow">
        </colgroup>
        <thead>
          <th>Dólares</th>
          <th>Pesos</th>
        </thead>
        <tbody>
          <?php
          for ($dolares=1; $dolares <= 10; $dolares++) {
            echo "<tr>";
              echo "<td>".$dolares."</td>";
              $pesos = $dolares*20.14;
              echo "<td>".$pesos."</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </center>
  </body>
</html>
