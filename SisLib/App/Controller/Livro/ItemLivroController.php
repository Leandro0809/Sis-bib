<?php


require_once '../../../App/Model/Item_Livro.php';
/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class ItemLivroController extends Item_Livro {
    
    protected $tabela = 'item_livro';  // define a tabela do banco

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
        $sql = "INSERT INTO $this->tabela (id_livro,status,condicao ) VALUES (:id_livro,:status,:condicao )";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id_livro', $this->id_livro);
        $stm->bindParam(':status', $this->status);
        $stm->bindParam(':condicao', $this->condicao);
        return $stm->execute();
    }
    
    
    // update de itens
    // public function update($id) {
    //     $sql = "UPDATE $this->tabela SET nome = :nome, descricao = :descricao, quantidade = :quantidade, id_autor = :id_autor, id_categoria = :id_categoria WHERE id = :id";
    //     $stm = Database::prepare($sql);
    //     $stm->bindParam(':id', $id, PDO::PARAM_INT);
    //     $stm->bindParam(':nome', $this->nome);
    //     $stm->bindParam(':descricao', $this->descricao);
    //     $stm->bindParam(':quantidade', $this->quantidade);
    //     $stm->bindParam(':id_autor', $this->id_autor);
    //     $stm->bindParam(':id_categoria', $this->id_categoria);
    //     return $stm->execute();
    // }
    // deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stm->execute();
    }
}

//     public function usuarioCreate(){
//         $titulo = "Cadastro de Usuário";
//         $livro = new UsuarioController;
//         include '../../../App/View/usuario/CadastrarUsuario.html.php';
//     }
//     public function usuarioStore(){
//         $nome = $_POST['nome'];
//         $cpf = $_POST['cpf'];
//         $quantidade = $_POST['quantidade'];
//         $endereco = $_POST['endereco'];
//         $email = $_POST['email'];
//         $senha = $_POST['senha'];
//         $senha2 = $_POST['confirmar_senha'];
//         $livro = new LivroController;
        
//             $livro->setNome($nome);
//             $livro->quantidade = $quantidade;
//             var_dump($livro);
//             $livro->insert();
//             if($livro->insert()){
//                 foreach ($quantidade as $itemlivro) {
//                     $itemlivro;
//                 }
//             }
//             header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');

//     }
        
//         // if($livro->insert()){
//         //     echo "categoria ". $nome. " inserido com sucesso";
            

    
//     public function usuarioIndex(){
//         $titulo = "Usuários Cadastradas";
//         $livro = new UsuarioController;
//         require '../../View/usuario/usuario.html.php';
//     }

//     public function usuarioUpdate(){
//         $titulo = "Atualizar usuario";
//         $livro = new UsuarioController;
//         $id = $_POST['id'];
//         $nome = $_POST['nome'];
//         $cpf = $_POST['cpf'];
//         $telefone = $_POST['telefone'];
//         $endereco = $_POST['endereco'];
//         $email = $_POST['email'];
//         include '../../View/usuario/AtualizarUsuario.html.php';
        
//     }

//     public function usuarioUpdateStore(){
//         $titulo = "Atualizar usuario";
//         $livro = new UsuarioController;
//         $id = $_POST['id'];
//         $nome = $_POST['nome'];
//         $cpf = $_POST['cpf'];
//         $telefone = $_POST['telefone'];
//         $endereco = $_POST['endereco'];
//         $email = $_POST['email'];
//         $livro->setNome($nome);
//         $livro->setCpf($cpf);
//         $livro->setTelefone($telefone);
//         $livro->setEndereco($endereco);
//         $livro->setEmail($email);
//         $livro->update($id);
//         header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');
        
//     }


// }


// $livro = new UsuarioController;

