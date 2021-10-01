<?php

/*echo "A disciplina é  " . $_POST['nome'] . " e o nome do professor é " . $_POST['prof'];

echo "<br><br>";

echo "A descrição da disciplina é: " . $_POST['desc'] "e o dia da disciplina é:" . $_POST['date'];

$arquivo = fopen('bancodedados.csv', 'a');

fwrite ($arquivo, $_POST ['nome'] . ';' . $_POST['prof'] . ';' . $_POST['data'] . ';' . $_POST['desc']); 
*/

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'A disciplina é ' . $_POST['nome'];

echo '<br><br>O professor é o ' . $_POST['prof'];

echo '<br><br>Ela ocorre no dia ' . $_POST['dia'];

echo '<br><br>Descrição ' . $_POST['desc'];

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectando com o banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//Preparamos a consulta para evitar SQL Injection
$stms = $bd->prepare('      INSERT disciplinas
                                    (nome, professor, dia, descricao, end_ip)
                            VALUES
                                    (:nome, :professor, :dia, :descricao, :end_id)');

$valores[':nome'] = $_POST['nome'];
$valores[':professor'] = $_POST['nome'];
$valores[':dia'] = $_POST['nome'];
$valores[':descricao'] = $_POST['desc'];
$valores[':end_id'] = $_POST['REMOTE_ADDR'];

//Consulta SQL
    if ($stmt->execute($valores) ){

        
    }


//Abro o arquivo para gravar mais coisas nele
//$arquivo = fopen('bancodedados.csv', 'a');

//$dia = $_POST['dia'];

//Forma não muito elegante
//$dia = substr( $dia, 8, 2) . '/' . substr( $dia, 5, 2) . '/' . substr( $dia, 0, 4);

//Formatação de datas
$timestamp = strtotime($dia);
$dia = date( 'd/m/Y', $timestamp);
//FIM Formatação de datas

//Escrevo no arquivo
fwrite( $arquivo,   $_POST['nome'] . ';' . 
                    $_POST['prof'] . ';' . 
                    $dia . ';' . 
                    $_POST['desc'] . ';' . 
                    $_SERVER['REMOTE_ADDR'] . "\r\n");

//fwrite( $arquivo, "{$_POST['nome']};{$_POST['prof']};{$dia};{$_POST['desc']}\r\n");

//Fecho o arquivo
fclose($arquivo);

echo "<br><br>{$_POST['nome']} gravada com sucesso do IP {$_SERVER['REMOTE_ADDR']}!";
