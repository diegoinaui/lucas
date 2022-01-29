<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$sexo = $_REQUEST['sexo'];

if (empty($nombre)) {
  die("El nombre no puede estar vacio");
}

if (empty($apellido)) {
  die("El apellido no puede estar vacio");
}

if (empty($sexo) || $sexo != 'M' && $sexo != 'F') {
  die("El sexo no es válido");
}

$color = 'pink';
if ($sexo == 'M')
  $color = 'skyblue';
?>

<html>

<head>

</head>

<body style='background-color: <?= $color; ?>'>
  <h1> Bienvenido <?= $nombre ?> <?= $apellido ?></h1>
</body>

</html>