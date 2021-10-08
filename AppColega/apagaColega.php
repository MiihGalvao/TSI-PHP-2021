<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Controle de acesso, se o usuário estiver "logado", pode acessar o conteúdo
session_start();

if(!isset($_SESSION['id'])){

    echo 'Faça o login antes! <a href="login.html">login<a>';
    exit();
}
//FIM controle de acesso

echo "O colega será apagado aqui!";