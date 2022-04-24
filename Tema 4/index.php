<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PW</title>
  </head>
  <body>
    <h1>Programación Web - Tema 4 PHP</h1>
    <h2>Ejercicios</h2>
    <ol>
      <?php
      $ejercicios = array(
        "Hola Mundo",
        "Tablas de Multiplicar",
        "Conversión Dólares a Pesos"
      );
      foreach ($ejercicios as $key => $ejercicio):
      ?>
      <li>
        <a href="Ejercicios/ejercicio<?php echo $key+1; ?>.php">Ejercicio <?php echo $key+1; ?>: <?php echo $ejercicio; ?></a>
      </li>
      <?php
        if ($key == 2) {
          ?>
          <li>
            <a href="Ejercicios/ejercicio3_tabla_diseño.php">Ejercicio 3 con diseño de tabla</a>
          </li>
          <?php
        }
      endforeach;
      ?>
    </ol>
    <br>
    <h2>Prácticas</h2>
    <ol>
      <li>
        <a href="Prácticas/prácticas.php">Práctica de PHP</a>
      </li>
    </ol>
    <br>
    <a href="https://btorreszav.github.io/PW/Tema%202/index.html">Tema 2: HTML y CSS</a>
    <br>
    <a href="https://btorreszav.github.io/PW/Tema%203/index.html">Tema 3: Javascript</a>
    <br>
    <a href="https://l18111937.000webhostapp.com/PW/Tema%204/index.php">Tema 4: PHP</a>
    <br>
    <a href="https://btorreszav.github.io/PW/">Inicio PW</a>
  </body>
</html>
