<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Controle de acesso, se o usuário estiver "logado", pode acessar o conteúdo
session_start();

//chama o controle de acesso/sessão
require_once('sessao/controle.php');

//chama a conexão com o banco
require_once('banco/conecta.php');
 
//Recupera todos os colegas para listar

$stmt = $bd->query('SELECT id, nome FROM colegas');

//joga todos os registros na variavel $registros
$registros = $stmt->fetchAll();

echo '</table>
      </form>';

//chama o html para mostrar para o usuário
require('telas/index.tela.php');
