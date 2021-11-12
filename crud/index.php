<?php

include 'banco/pdo.php'

include  'classes/disciplina.class.php';

$objDisciplina = new Disciplina($bd);

include 'telas/header.php';

$lista = $objDisciplina->listar();

include 'telas/footer.php';

include 'telas/lista.php';

include 'banco/pdo.php';