<?php

require_once 'Database.php';

##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set

class Categoria extends Database 
{ 
    
    protected $tabela;
    public $nome;
    public $setor;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getSetor() {
        return $this->setor;
    }

}