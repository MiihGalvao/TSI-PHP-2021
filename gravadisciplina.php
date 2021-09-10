<?php

echo "A disciplina é  " . $_POST['nome'] . " e o nome do professor é " . $_POST['prof'];

echo "<br><br>";

echo "A descrição da disciplina é: " . $_POST['desc'] "e o dia da disciplina é:" . $_POST['date'];

$arquivo = fopen('bancodedados.csv', 'a');

fwrite ($arquivo, $_POST ['nome'] . ';' . $_POST['prof'] . ';' . $_POST['data'] . ';' . $_POST['desc']); 

