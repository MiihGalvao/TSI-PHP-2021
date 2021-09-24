<style>
table{  border: solid 0px;}
th{ background: gray;
    color: white}
td{ background: #dedede}
</style>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//consulta SQL
$sql = 'SELECT 
            nome, professor, dia, descricao
        FROM 
            disciplinas';

echo '<table>
        <tr>
            <th>Nome</th><th>Professor</th><th>Dia</th><th>Descrição</th>
        </tr>';

//Executa a consulta SQL e já trata a saída no looping
foreach( $bd->query( $sql ) as $registro ){

    echo "  <tr>
                <td>{$registro['nome']}</td>
                <td>{$registro['professor']}</td>
                <td>{$registro['dia']}</td>
                <td>{$registro['descricao']}</td>
            </tr>";
}

echo '</table>';