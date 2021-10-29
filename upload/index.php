<?php

if ($_FILES)

echo "<pre>";

var_dump($_FILES)

$tipo = mime_content_type($_FILES['arquivoDoUsuario']['tmp_name']);

switch ( $tipo ) {

    case 'image/jpeg':

        $ext = '.jpg';
        break;
        
    case 'image/png':

        $ext = '.png';
        break;

    case 'image/gif':

        $ext = '.gif';
        break;

    case 'application/pdf':

        $ext = '.pdf';
        break;
    
    default:

     //Se o tipo não for aceito, avisamos o usuário 
     echo "Tipo de arquivo não aceito!";
     exit();
}


echo "\n\n\n"

  //Movemos aqui, o arquivo temporário recebido do lado do servidor
    //para um local definitivo. move_uploaded_file( lugar temporário, lugar definitivo)
move_uploaded_file($_FILES['arquivoDoUsuario']['tmp_name'], __DIR__. '/arquivosRecebidos/' . rand(1,9999999999) . '_user' . $ext);

//Msg de Sucesso
echo "Arquivo {$_FILES['arquivoDoUsuario']['name']} recebido com sucesso!<br><br>";
}

//enviar arq. lado servidor
include "formUpload.php"