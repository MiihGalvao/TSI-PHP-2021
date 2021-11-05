<?php

include 'Usuario.class.php';

$objUsuario = new Usuario;

echo "O atributo é: " . $objUsuario->nome . "<br><br>";

$objUsuario->addUser('Milena Galvao');

echo "<br><br>O atributo é: " . $objUsuario->nome . "<br><br>";

$objUsuario->addUser('Milena');

echo "<br><br>O atributo é: " . $objUsuario->nome . "<br><br>";