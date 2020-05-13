<?php
function resolucion_1()
{
  abrir_html("Ejercicio 1");
  echo "<ul>";
  for ($i = 1; $i <= $_POST['limite']; $i++) {
    echo "<li> $i </li>";
  }
  echo "</ul>";
  cerrar_html();
}
function resolucion_2()
{
  abrir_html("Ejercicio 2");
  echo "Nombre: " . $_POST['nombre'] . "<br/>";
  echo "Apellido: " . $_POST['apellido'] . "<br/>";
  echo "Edad: " . $_POST['edad'] . "<br/>";
  cerrar_html();
}
function resolucion_3()
{
  abrir_html("Ejercicio 3");
  if (is_numeric($_POST['num1']) && is_numeric($_POST['num2']) && is_numeric($_POST['num3'])) {
    echo "( " . $_POST['num1'] . "" . " * " . $_POST['num2'] . " ) - " . $_POST['num3'] . " = ";
    echo (($_POST['num1'] * $_POST['num2']) - $_POST['num3']);
  } else {
    echo "<h2>no completaste todos los campos correctamente<h2>";
  }
  cerrar_html();
}
function resolucion_4()
{
  abrir_html("Ejercicio 4");
  if (is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {
    $IMC = ($_POST['peso'] / ($_POST['altura'] ** 2));
    if ($IMC < 18.5) {
      echo "<h2>BAJO</h2>";
    } elseif (($IMC >= 18.5) && ($IMC < 25)) {
      echo "<h2>NORMAL</h2>";
    } elseif (($IMC >= 25) && ($IMC < 29.9)) {
      echo "<h2>SOBREPESO</h2>";
    } elseif ($IMC > 29.9) {
      echo "<h2>OBESIDAD</h2>";
    }
  } else {
    echo "<h2>no completaste bien todos los campos</h2>";
  }
  cerrar_html();
}

function resolucion_5()
{
  abrir_html("Ejercicio 5");
  if (isset($_POST['limite']) && is_numeric($_POST['limite'])) {
    $limite_tabla = $_POST['limite'];
    echo "<table class='tabla'>";
    for ($i = 0; $i <= $limite_tabla; $i++) {
      echo "<tr class='fila'>";
      if ($i == 0) {
        for ($k = 0; $k <= $limite_tabla; $k++)
          echo "<td class='celda color'>" . $k . "</td>";
      } else {
        echo "<tr class='fila'>" . "<td class='celda color'>" . $i . "</td>";
        for ($j = 1; $j <= $limite_tabla; $j++) {
          if ($j == $i)
            echo "<td class='color'>" . $i * $j . "</td>";
          else
            echo "<td class='celda'>" . $i * $j . "</td>";
        }
        echo "</tr>";
      }
    }
    echo "</table>";
  } else {
    echo "<h2>definir tamaño de la tabla</h2>";
  }
  cerrar_html();
}
