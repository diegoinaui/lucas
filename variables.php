<?php
// Tipos de variables
$unEntero = 1; // Entero o int
$unDecimal = 1.5; // Decimal o float
$unaCadena = "Hola"; // Cadena o string
$unBooleano = true; // Booleano o bool
$unArray = array(1, 2, 3); // Array o array
$unObjeto = new stdClass(); // Objeto o object
$unNull = null; // Null o null
$unResource = fopen("variables.php", "r"); // Resource o resource

// && operador lógico AND (Y)
// || operador lógico OR (O)
// ! operador lógico NOT (N)

// + operador de adición
// - operador de resta
// * operador de multiplicación
// / operador de división
// % operador de módulo (resto de la división)

// > mayor que
// < menor que
// >= mayor o igual que
// <= menor o igual que
// == igual que
// === igual que y de mismo tipo

// bucle while
$i = 0;
while ($i < 10) {
   echo $i;
   $i++;
}

// bucle do while
$i = 0;
do {
   echo $i;
   $i++;
} while ($i < 10);

// bucle for  
for ($i = 0; $i < 10; $i++) {
   echo $i;
}

// break
for ($contador = 0; $contador < 10; $contador++) {
   if ($contador == 5) {
      break;
   }

   echo $contador;
}

// continue
for ($i = 0; $i < 10; $i++) {
   if ($i == 5) {
      continue;
   }
   echo $i;
}

// if
if (true) {
   echo 'true';
}

if (false) {
   echo 'false';
}

$a = true;
if ($a) {
   echo 'true';
} else {
   echo 'false';
}
