<?php

class Persona
{
  // Propiedades
  public $nombre;

  private $edad;

  // Metodos
  public function caminar()
  {
    echo "Estoy caminando\n";
  }

  public function setEdad( $edad ){
    $this->edad = $edad;
  }

  public function esMenorDeEdad()
  {
    if ($this->edad < 18) {
      echo "Es menor de edad\n";
    } else {
      echo "Es mayor de edad\n";
    }
  }
}

$persona = new Persona();
$persona->nombre = "Diego";

$persona->caminar();

$persona->setEdad(16);

$persona->esMenorDeEdad();
