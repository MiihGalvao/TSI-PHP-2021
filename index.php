<?php
//Basico

//Util pra debug não usar em PRODUÇÃO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Fim do debug não usar em PRODUÇÃO

$nome = 'Milena Galvão';

echo 'Olá Mundo !'; 

if ( $nome == 'Milena') {

    echo '<br><br> O nome é igual';
}
else {
    echo '<br><br> O nome não é igual';
}

echo '<br><br>';

$dia = 'sexta';

switch($dia){

    case 'segunda':

        echo 'Estude!';
    break;

    case 'terça':

        echo 'Va para a aula de CMS!';
    break;

    case 'quarta':

        echo 'Va para a aula de BD!';
    break;

    case 'quinta':

        echo 'Va para aula de PHP!';
    break;

    case 'sexta':

        echo 'Va para o Kombuca!';
    break;
default:

        echo 'Vá descansar';
}

echo '<br><br>';

echo '<br> 2+2 = ' . (2+2) . '!';

echo '<br><br>';

/*if ( $animal == 'cachorro'){
    $tipo = 'mamifero';
} else {
    $tipo = 'desconhecido';
}*/

$animal = 'cachorro';

$tipo = $animal == 'cachorro' ? 'mamifero' : 'desconhecido';

$sobrenome = $sobrenome_informado ?? 'não informado';

echo "<br>Sobrenome: $sobrenome<br>";

 echo "<br>$animal é um animal do tipo: $tipo<br>";

echo '<br><br>';

//LOOPING
echo "FOR: <br>";
for ( $i = 0; $i < 10; $i++) {
    echo "Essa é a linha $i <br>";
}
echo "WHILE:<br>";
$i = 0;

while( $i < 10) {
    
    echo "Essa é a linha $i<br>";

    $i++;
}

echo "DO: <br>";
$i = 0;

do{

    echo "Essa é a linha $i<br>";
$i++;

} while ($i < 10);

include 'link.html'; //Se não existir link.html da erro mas continua a execução;
require 'link.html'; //Se não existir link.html da erro fatal e para o código
include_once 'link.html'; // Verifica se ja foi incluido antes, se sim ...
require_once 'link.html';// Verifica se ja foi incluido antes, se sim ...++