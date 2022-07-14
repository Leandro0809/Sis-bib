<?php

require_once 'Database.php';

class Autor extends Database 
{   
    
    protected $tabela;
    public $nome;
    public $nacionalidade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

}