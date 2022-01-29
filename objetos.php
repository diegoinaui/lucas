<?php

class Persona
{
  var $nombre;
  var $apellido;
  var $edad;
  var $pais;
}

// $persona = new Persona();
// $persona->nombre = "Diego";
// $persona->apellido = "Perez";
// $persona->edad = 30;
// $persona->pais =   "Argentina";

$i = 0;
while (true) {
  echo "Ingrese el nombre: ";
  $nombre = trim(fgets(STDIN));

  if ($nombre == "") {
    break;
  }
  echo "Ingrese el apellido: ";
  $apellido = trim(fgets(STDIN));

  echo "Ingrese la edad: ";
  $edad = trim(fgets(STDIN));

  echo "Ingrese el pais: ";
  $pais = trim(fgets(STDIN));

  $personas[$i] = new Persona();
  $personas[$i]->nombre = $nombre;
  $personas[$i]->apellido = $apellido;
  $personas[$i]->edad = $edad;
  $personas[$i]->pais = $pais;
  $i++;
}

foreach($personas as $persona) {
  echo $persona->nombre . "  " . $persona->apellido . "  " .  $persona->edad . " " . $persona->pais . "\n";
}

