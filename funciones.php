<?php
// functions 
function imprimeSiMayor($cadena)
{
  if (strlen($cadena) > 10) {
    print("La cadena es más larga que 10 caracteres\n");
  } else {
    print("La cadena es menor o igual a 10 caracteres\n");
  }
}

// strlen  significa "string length"  
$cadenaCorta = "abcde \n";
$largoDeCadena = strlen($cadenaCorta);
print($largoDeCadena); //

$cadena = "abcde \n";
imprimeSiMayor($cadena);

$cadena = "dfsfsdfdsfdsfsdfds\n";
imprimeSiMayor($cadena);

$otraCadena = "abcdefd \n";
imprimeSiMayor($otraCadena);

imprimeSiMayor("3213123213123123123asdadas");

// Necesitamos escribir una función que reciba dos variables(parametros) y imprime la suma de ambas.
function imprimeLaSuma($x, $y)
{
  $suma = $x + $y;
  print("La suma de $x y $y es $suma\n");
}

$x = 2;
$y = 3;
imprimeLaSuma($x, $y);

for ($x = 0; $x < 7; $x++) {
  for ($y = 0; $y < 3; $y++) {
    imprimeLaSuma($x, $y);
  }
}
?>