<?php

$entero = 1;
$cadena =   "Hola";
$decimal =  1.5;
$booleano = true;

// Sin elementos
$unaVariableDelTipoArray =  []; // array()

// Con un elemento
$unaVariableDelTipoArray = [1]; // array(1)

// Con dos elementos
$unaVariableDelTipoArray = [1, 31]; // array(1, 31)

// Con tres elementos
$unaVariableDelTipoArray = [1, 24, 55]; // array(1, 24, 55)

/// Con elementos cadenas
$unaVariableDelTipoArray =  []; // array()
$unaVariableDelTipoArray[] = "Hola";
$unaVariableDelTipoArray[] = "Mundo";
$unaVariableDelTipoArray[] = "test";
$unaVariableDelTipoArray[] = "Probando";
$unaVariableDelTipoArray[] = "Arreglos";

// Con elementos enteros
$unaVariableDelTipoArray =  []; // array()
$unaVariableDelTipoArray[] = 1;
$unaVariableDelTipoArray[] = 24;
$unaVariableDelTipoArray[] = 55;
$unaVariableDelTipoArray[] = 566;
$unaVariableDelTipoArray[] = 55;

$a = $unaVariableDelTipoArray[3] + $unaVariableDelTipoArray[2];

// array bidimensional
$a = [];
$a[] = [0, 1];
$a[] = [11, 20];
//echo $a[1][1];

$tableroTateti[0] = [' ', 'X', 'O'];
$tableroTateti[1] = [' ', 'X', 'O'];
$tableroTateti[2] = [' ', 'X', 'O'];

$tableroTateti = [
  ['O', ' ', ' '],
  [' ', 'X', ' '],
  [' ', ' ', ' ']
];

// echo $tableroTateti[0][0] . "\n";
// echo $tableroTateti[1][1] . "\n";

// Array o MAtrices Asociativas
$otroArray['primer'] = 0;
$otroArray['otro cualquier nombre'] = 30;

// $datosDelAlumno= [ 'nombre' => 'Juan', 'apellido' => 'Perez', 'edad' => '30' ];

$nombre_1 = "Diego";
$apellido_1 = "Perez";
$edad_1 = 30;
$pais_1 =   "Argentina";

$nombre_2 = "Lucas";
$apellido_2 = "Peralta";
$edad_2 = 20;
$pais_2 =   "Japon";

$datosDeAlumnos = [];

$i = 0;
$datosDeAlumnos[$i]['nombre'] = "Diego";
$datosDeAlumnos[$i]['apellido'] = "Perez";
$datosDeAlumnos[$i]['edad'] = 30;
$datosDeAlumnos[$i]['pais'] =   "Argentina";

$i = 1;
$datosDeAlumnos[$i]['nombre'] = "Lucas";
$datosDeAlumnos[$i]['apellido'] = "Peralta";
$datosDeAlumnos[$i]['edad'] = 20;
$datosDeAlumnos[$i]['pais'] =   "Japon";

$i = 2;
$datosDeAlumnos[$i]['nombre'] = "Lucas";
$datosDeAlumnos[$i]['apellido'] = "Peralta";
$datosDeAlumnos[$i]['edad'] = 40;
$datosDeAlumnos[$i]['pais'] =   "Korea";

for ($i = 0; $i < count($datosDeAlumnos); $i++) {
  echo $datosDeAlumnos[$i]['nombre'] . "  " . $datosDeAlumnos[$i]['apellido'] . "  " .  $datosDeAlumnos[$i]['edad'] . " " . $datosDeAlumnos[$i]['pais'] . "\n";
}
