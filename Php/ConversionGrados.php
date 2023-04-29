<?php


function celsiusToFahrenheit($celsius) {
  return ($celsius * 9/5) + 32;
}


function fahrenheitToCelsius($fahrenheit) {
  return ($fahrenheit - 32) * 5/9;
}


function celsiusToKelvin($celsius) {
  return $celsius + 273.15;
}


function kelvinToCelsius($kelvin) {
  return $kelvin - 273.15;
}


function fahrenheitToKelvin($fahrenheit) {
  return ($fahrenheit + 459.67) * 5/9;
}

function kelvinToFahrenheit($kelvin) {
  return ($kelvin * 9/5) - 459.67;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recuperar los valores del formulario
  $valor = $_POST['valor'];
  $escala1 = $_POST['escala1'];
  $escala2 = $_POST['escala2'];

 
  if ($escala1 == 'Celsius') {
    $celsius = $valor;
  } elseif ($escala1 == 'Fahrenheit') {
    $celsius = fahrenheitToCelsius($valor);
  } else {
    $celsius = kelvinToCelsius($valor);
  }


  if ($escala2 == 'Celsius') {
    $resultado = $celsius;
  } elseif ($escala2 == 'Fahrenheit') {
    $resultado = celsiusToFahrenheit($celsius);
  } else {
    $resultado = celsiusToKelvin($celsius);
  }

  echo "<h5>". $valor . ' ' . $escala1 . ' son ' . $resultado . ' ' . $escala2."</h5>";
}

?>