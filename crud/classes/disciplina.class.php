<?php

class Disciplina {

    var $bd;

    function __construct($bd)
    {
        $this->bd = $bd;
    }

    function listar()
    {
        $sql = 'SELECT id, nome, professor, dia, descricao FROM disciplinas ORDER BY nome';

        foreach ($this->bd->query($sql) as $registro) {
           
            $lista[$registro['id']] = $registro; 
        }

        return $lista;
    }
}