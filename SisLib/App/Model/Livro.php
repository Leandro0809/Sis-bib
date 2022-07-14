<?php

require_once 'Database.php';

class Livro extends Database 
{   
    
    protected $tabela;
    public $nome;
    public $descricao;
    public $quantidade;
    public $id_autor;
    public $id_categoria;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getIdAutor() {
        return $this->id_autor;
    }

    public function setIdAutor($id_autor) {
        $this->id_autor = $id_autor;
    }

    public function getIdCategoria() {
        return $this->id_categoaria;
    }

    public function setIdCategoria($id_categoaria) {
        $this->id_categoaria = $id_categoaria;
    }

}