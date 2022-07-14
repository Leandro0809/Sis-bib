<?php

use LivroController as GlobalLivroController;

require_once '../../../App/Model/Livro.php';
require_once '../../../App/Controller/Livro/ItemLivroController.php';
require_once '../../../App/Controller/Categoria/CategoriaController.php';
require_once '../../../App/Controller/Autor/AutorController.php';
/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class LivroController extends Livro{
    
    protected $tabela = 'livro';  // define a tabela do banco

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
        $sql = "INSERT INTO $this->tabela (nome,descricao ,quantidade,id_autor,id_categoria) VALUES (:nome,:descricao ,:quantidade,:id_autor,:id_categoria)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':descricao', $this->descricao);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':id_autor', $this->id_autor);
        $stm->bindParam(':id_categoria', $this->id_categoria);
        return $stm->execute();
    }
    
    
    // update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, descricao = :descricao, quantidade = :quantidade, id_autor = :id_autor, id_categoria = :id_categoria WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':descricao', $this->descricao);
        $stm->bindParam(':quantidade', $this->quantidade);
        $stm->bindParam(':id_autor', $this->id_autor);
        $stm->bindParam(':id_categoria', $this->id_categoria);
        return $stm->execute();
    }
    // deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stm->execute();
    }

    public function idLivro(){
        $sql = "SELECT MAX(id) FROM livro";
        $stm = Database::prepare($sql);

        // $stm->bindParam(':id', $id, PDO::PARAM_INT);
        //   $stm->bindParam(':nome', $this->nome);
        //   $stm->bindParam(':publicacao', $this->publicacao);
        $stm->execute();
        return $stm->fetch();

    }

    public function livro(){
        $titulo = "Cadastro de Livro";
        $autor = new AutorController;
        $categoria = new Categoria;
        include '../../../App/View/livro/CadastrarLivro.html.php';
    }
    public function livroStore(){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $id_autor = $_POST['id_autor'];
        $id_categoria = $_POST['id_categoria'];
        $livro = new LivroController;
        $livro->nome = $nome;
        $livro->quantidade = $quantidade;
        $livro->descricao = $descricao;
        $livro->id_autor = $id_autor;
        $livro->id_categoria = $id_categoria;
        var_dump($livro);
        $livro->insert();
        if($livro->insert()){
            $item_livro = New ItemLivroController;
            $id = $livro->idLivro();
            foreach ($id as $valor){
                $proximo_id =  $valor;
                }
            foreach ($quantidade as $itens_livro){
                $item_livro->id_livro = $proximo_id;
                $item_livro->condicao = "Boa";
                $item_livro->status = "Disponível";
                $item_livro->insert();
                }                        
            }
        header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');
    }
            

        
        // if($livro->insert()){
        //     echo "categoria ". $nome. " inserido com sucesso";
            

    
    public function livroIndex(){
        $titulo = "Usuários Cadastradas";
        $livro = new UsuarioController;
        require '../../View/usuario/usuario.html.php';
    }

    public function livroUpdate(){
        $titulo = "Atualizar Livro";
        $livro = new UsuarioController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        include '../../View/usuario/AtualizarUsuario.html.php';
        
    }

    public function livroUpdateStore(){
        $titulo = "Atualizar livro";
        $livro = new UsuarioController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $livro->setNome($nome);
        $livro->setCpf($cpf);
        $livro->setTelefone($telefone);
        $livro->setEndereco($endereco);
        $livro->setEmail($email);
        $livro->update($id);
        header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');
        
    }


}


