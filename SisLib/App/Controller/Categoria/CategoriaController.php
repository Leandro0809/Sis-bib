<?php


require_once '../../../App/Model/Categoria.php';
/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class CategoriaController extends Categoria {
    
    protected $tabela = 'categoria';  // define a tabela do banco

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
        $sql = "INSERT INTO $this->tabela (nome, setor) VALUES (:nome, :setor)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':setor', $this->setor);
        return $stm->execute();
    }
    
    // update de itens
    public function update($idcategoria) {
        $sql = "UPDATE $this->tabela SET nome = :nome, setor = :setor WHERE idcategoria = :idcategoria";
        $stm = Database::prepare($sql);
        $stm->bindParam(':idcategoria', $idcategoria, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':setor', $this->setor);

        // $stm->bindParam(':id', $id, PDO::PARAM_INT);
        //   $stm->bindParam(':nome', $this->nome);
        //   $stm->bindParam(':publicacao', $this->publicacao);
        return $stm->execute();
    }
    
    // deleta  1 item
    public function delete($idcategoria) {
        $sql = "DELETE FROM $this->tabela WHERE idcategoria = :idcategoria";
        $stm = Database::prepare($sql);
        $stm->bindParam(':idcategoria', $idcategoria, \PDO::PARAM_INT);
        return $stm->execute();
    }

    public function categoriaCreate(){
        $titulo = "Cadastro de Categoria";
        $categoria = new CategoriaController;
        include '../../../App/View/categoria/CadastrarCategoria.html.php';
    }
    public function categoriaStore(){
        $nome = $_POST['nome'];
        $setor = $_POST['setor'];
        $categoria = new CategoriaController;
        $categoria->setNome($nome);
        $categoria->setSetor($setor);
        $categoria->insert();
        header('Location: categoriaIndex.php');
        // if($categoria->insert()){
        //     echo "categoria ". $nome. " inserido com sucesso";
            

    }
    public function categoriaIndex(){
        $titulo = "Categorias Cadastradas";
        $categoria = new CategoriaController;
        require '../../View/categoria/categoria.html.php';
    }

    public function categoriaUpdate(){
        $titulo = "Atualizar categoria";
        $categoria = new CategoriaController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $setor = $_POST['setor'];

        echo $id;
        echo $nome;
        echo $setor;
        include '../../View/categoria/AtualizarCategoria.html.php';
        
    }

    public function categoriaUpdateStore(){
        $titulo = "Atualizar categoria";
        $categoria = new CategoriaController;
        $idcategoria = $_POST['id'];
        $nome = $_POST['nome'];
        $setor = $_POST['setor'];
        $categoria->setNome($nome);
        $categoria->setsetor($setor);
        $categoria->update($idcategoria);
        header('Location: categoriaIndex.php');
        
    }


}


$categoria = new CategoriaController;

