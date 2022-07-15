<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'bd.php';
?>

<?php
abstract class Fornecedor extends bd{   
    
    protected $tabela;
    public $nome;
    public $cnpj;
    public $cidade;
    public $idfornecedor;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function getCnpj($cnpj){
            return $this->cnpj;
    }
    
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function getCidade() {
        return $this->cidade;
    }

    public function setIdfornecedor($idfornecedor){
        $this->setIdfornecedor = $idfornecedor;
    }
    public function getIdfornecedor($telefone){
        return $this->idfornecedor;
    }

 
}

?>

<?php

      $fornecedor = new fornecedor;
      if(isset($_POST['cadastrar'])):
        $idfornecedor= $_POST['idfornecedor'];
            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
            $cidade = $_POST['cidade'];


            $fornecedor->setNome($nome);
            $fornecedor->setCnpj($cnpj);
            $fornecedor->setCidade($cidade);
            $fornecedor->setIdfornecedor($idfornecedor);


            if($fornecedor->insert()){
                echo "O Fornecedor ". $nome. " foi inserido com sucesso";
            }
      endif;
      ?>