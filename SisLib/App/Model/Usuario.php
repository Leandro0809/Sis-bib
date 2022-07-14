<?php

require_once 'Database.php';

##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set

class Usuario extends Database 
{
    
    protected $tabela;
    public $nome;
    public $cpf;
    public $telefone;
    public $endereco;
    public $email;
    public $senha;

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    public function getSenha() {
        return $this->senha;
    }

}