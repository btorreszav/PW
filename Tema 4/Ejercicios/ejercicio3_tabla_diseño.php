<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conversión dólares/pesos</title>
    <style media="screen">
      body {
        margin: 0;
      }
      table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 200px;
        text-align: center;
      }

      td, th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      tr:nth-child(even){background-color: #f2f2f2;}

      tr:hover {background-color: #ddd;}

      th {
        padding-top: 12px;
        padding-bottom: 12px;
        background-color: #04AA6D;
        color: white;
      }

      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Conversión dólares/pesos</h1>
    <center>
      <table>
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
