<?php

// Base de datos.
$users = [];
$users[] = [
  'username' => 'lucas',
  'password' => '123',
  'nombre' => 'Lucas',
  'apellido' => 'Gonzalez',
];

$users[] = [
  'username' => 'diego',
  'password' => '456',
  'nombre' => 'Diego',
  'apellido' => 'Peralta',
];

$users[] = [
  'username' => 'javier',
  'password' => '789',
  'nombre' => 'Javier',
  'apellido' => 'Camisasca',
];

$username = isset($_REQUEST['username'])  ? $_REQUEST['username'] : die('Get out of here! mother fucker!');
$password = isset($_REQUEST['password'])  ? $_REQUEST['password'] : die('Get out of here! mother fucker!');

if (!$username) {
  die('User can not be empty!');
}

if (!$password) {
  die('Password can not be empty!');
}

$valid = false;
foreach ($users as $user) {
  if ($user['username'] == $username){
    if ($user['password'] == $password) {
      $valid = true;
     
      break;
    } else {
      die('Password is incorrect!');
    }
  }
}

if (!$valid) {
  die('User is not valid!');
}

echo "Welcome {$user['nombre']}!";