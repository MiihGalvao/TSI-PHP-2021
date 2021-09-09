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

unset ($despesas);//Apaga / Destroi o Vetor
$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

echo "<br>despesas<br>";

foreach ($despesas as $nome /*indice*/ => $gasto) {

    echo "$nome: R$ ". number_format ($gasto, 2, ',','.')."<br>";

}
"<br><br><br>";

$diasemana[0] = 'Dia Livre'; 
$diasemana[1] = 'Aula Dev Web';
$diasemana[2] = 'Aula PI' ;
$diasemana[3] = 'Aula PHP' ;
$diasemana[4] = 'Aula android';
$diasemana[5] = 'Descanso';
$diasemana[6] = 'Mais Descanso';

for ( $i = 0; $i < 7; $i++){

    echo $diasemana[$i]. "<br>";
}

unset ($diasemana);

$diasemana ['Segunda'] = 'Dia Livre' ;
$diasemana ['Terça'] = 'Aula Dev Web';
$diasemana ['Quarta'] = 'Aula PI' ; 
$diasemana ['Quinta'] = 'Aula PHP' ;
$diasemana ['Sexta'] = 'Aula android' ;
$diasemana ['Sabado'] = 'Descanso' ;
$diasemana ['Domingo'] = 'Mais Descanso';

foreach ($diasemana as $rotina => $feito) {

    echo "<br>$rotina: $feito \n";

}


echo "$nome: R$ " . number_format($gasto, 2, ',', '.') . "<br>";

$aulas['pi'] = 'segunda';
$aulas['cms'] = 'terça';
$aulas['direito'] = 'terça';
$aulas['bd'] = 'quarta';
$aulas['ligserv'] = 'quinta';
$aulas['scriptweb'] = 'sexta';

echo '<pre>';

var_dump($aulas);//Ajuda muito na depuração do código

foreach( $aulas as $aula => $dia){

    echo "A aula de $aula é na $dia\n";//Para quebrar a linha, utilizei um caracter de escape
}

echo "Um tab é \t sabia?\n";
echo "Uma quebra de linha em Windows é \r\n";
echo "Se eu quiser mostrar aspas \"tudo bem\"\n";
echo "Uma variável em php é assim \$variavel";

unset($aulas);
unset($dia);

$aulas['segunda'][0] = 'pi';
$aulas['terça'][0] = 'cms';
$aulas['terça'][1] = 'direito';
$aulas['terça'][2] = 'ead';
$aulas['quarta'][0] = 'bd';
$aulas['quinta'][0] = 'lingserv';
$aulas['sexta'][0] = 'scriptweb';
$aulas['sexta'][1] = 'kumbuca';

/*

 segunda | terça   | quarta | quinta   | sexta
0 pi     | cms     | bd     | lingserv | scripweb
1        | direito |        |          | kumbuca
2        | ead     |        |          |

*/

echo "\n\n";

foreach( $aulas as $dia => $disciplinas){//Coluna

    echo "Aula(s) na $dia: ";
    
    foreach( $disciplinas as $disciplina ){//Linha

        echo "$disciplina, ";
    }

    echo "\n";
}

include('linkform.html');
