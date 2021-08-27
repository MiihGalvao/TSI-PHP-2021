<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$despesas[0] = 345.55;
$despesas[1] = 135.00;
$despesas[2] = 600.00;
$despesas[3] = 900.00;
$despesas[4] = 400.00;

for ( $i = 0; $i < 5; $i++){

    echo $despesas[$i]. "<br>";
}

unset ($despesas);//Apaga / Distroi o Vetor
$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

echo "<br>despesas<br>";

foreach ($despesas as $nome /*indice*/ => $gasto) {

    echo "$nome: R$ ". number_format ($gasto, 2, ',','.')."<br>";

}

