<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Inicializo a sessão
session_start();

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectamos com o Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//preparamos a consulta no banco buscando pelo e-mail passado pelo usuário 
$stmt = $bd->prepare('SELECT id, nome, senha FROM usuarios WHERE email = :email');

//executamos a consulta no banco
$stmt->execute([':email' => $_POST['email']]);

//recuperamos o registro retornado na consulta
$registro = $stmt->fetch(PDO::FETCH_ASSOC);

//Se retornar algo, ou seja, há um user com o email fornecido
if($registro){

    //verifica se a senha passada bate com o hash da senha gravado no banco
    if( password_verify( $_POST['pass'], $registro['senha']) ){

        //defino as variáveis de sessão
        $_SESSION['nome'] = $registro['nome'];
        $_SESSION['id'] = $registro['id'];

        echo 'Menu: <a href="index.php">Colegas</a> <br><br>
                    <form method="post" action="sair.php"><button>Sair</button></form>';
    }else{

        //se o usuário errar a senha, destruo a sessão
        session_destroy();

        echo "Credenciais inválidas <br><br><a href='login.html'>Tente novamente</a>";
    }

}else{

    //se não existir um usuário com o email fornecido, destruo a sessão
    session_destroy();

    echo "Credenciais inválidas <br><br><a href='login.html'>Tente novamente</a>";
}

