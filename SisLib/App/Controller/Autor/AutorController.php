<?php

require_once '../../../App/Model/Autor.php';
/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class AutorController extends Autor {
    
    protected $tabela = 'autor';  // define a tabela do banco

    // busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }

    // busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = Database::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    // faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome, nacionalidade) VALUES (:nome, :nacionalidade)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':nacionalidade', $this->nacionalidade);
        return $stm->execute();
    }
    
    // update de itens
    public function update($idautor) {
        $sql = "UPDATE $this->tabela SET nome = :nome, nacionalidade = :nacionalidade WHERE idautor = :idautor";
        $stm = Database::prepare($sql);
        $stm->bindParam(':idautor', $idautor, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':nacionalidade', $this->nacionalidade);

        // $stm->bindParam(':id', $id, PDO::PARAM_INT);
        //   $stm->bindParam(':nome', $this->nome);
        //   $stm->bindParam(':publicacao', $this->publicacao);
        return $stm->execute();
    }
    
    // deleta  1 item
    public function delete($idautor) {
        $sql = "DELETE FROM $this->tabela WHERE idautor = :idautor";
        $stm = Database::prepare($sql);
        $stm->bindParam(':idautor', $idautor, \PDO::PARAM_INT);
        return $stm->execute();
    }

    public function autorCreate(){
        $titulo = "Cadastro de Autor";
        $autor = new AutorController;
        include '../../View/autor/CadastrarAutor.html.php';
    }
    public function autorStore(){
        $nome = $_POST['nome'];
        $nacionalidade = $_POST['nacionalidade'];
        var_dump($nome,$nacionalidade);
        $autor = new AutorController;
        $autor->setNome($nome);
        $autor->setNacionalidade($nacionalidade);
        $autor->insert();
        header('Location: AutorIndex.php');
        // if($autor->insert()){
        //     echo "autor ". $nome. " inserido com sucesso";
            

    }
    public function autorIndex(){
        $titulo = "Autores Cadastrados";
        $autor = new AutorController;
        require '../../View/Autor/Autor.html.php';
    }

    public function autorUpdate(){
        $titulo = "Atualizar Autor";
        $autor = new AutorController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $nacionalidade = $_POST['nacionalidade'];

        echo $id;
        echo $nome;
        echo $nacionalidade;
        include '../../View/Autor/AtualizarAutor.html.php';
        
    }

    public function autorUpdateStore(){
        $titulo = "Atualizar Autor";
        $autor = new AutorController;
        $idautor = $_POST['id'];
        $nome = $_POST['nome'];
        $nacionalidade = $_POST['nacionalidade'];
        $autor->setNome($nome);
        $autor->setNacionalidade($nacionalidade);
        $autor->update($idautor);
        header('Location: AutorIndex.php');
        
    }


}


$autor = new AutorController;

