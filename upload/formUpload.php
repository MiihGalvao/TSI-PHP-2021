<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <div>
        <form method="POST" action="index.php" enctype="multipart" ></form>
        <label for="arquivo">Escolha seu arquivo</label>
            <br><br>
            <input type="file" id="arquivo" name="arquivoDoUsuario">
            <br><br>
            <input type="submit" value="Enviar Arquivo">
    </div>
</body>
</html>