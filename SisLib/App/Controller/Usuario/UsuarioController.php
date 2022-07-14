<?php


require_once '../../../App/Model/Usuario.php';
/**
 * Salvar como Alunos.php
 * herda da classe crudAlunos
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */
class UsuarioController extends Usuario {
    
    protected $tabela = 'usuario';  // define a tabela do banco

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
        $sql = "INSERT INTO $this->tabela (nome, cpf,telefone,endereco,email,senha) VALUES (:nome,:cpf,:telefone,:endereco,:email,:senha)";
        $stm = Database::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':cpf', $this->cpf);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':endereco', $this->endereco);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
        var_dump($this->nome);
        return $stm->execute();
    }
    
    // update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, cpf = :cpf, telefone = :telefone, endereco = :endereco, email = :email WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':cpf', $this->cpf);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':endereco', $this->endereco);
        $stm->bindParam(':email', $this->email);
        return $stm->execute();
    }
    // deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = Database::prepare($sql);
        $stm->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stm->execute();
    }

    public function usuarioCreate(){
        $titulo = "Cadastro de Usuário";
        $usuario = new UsuarioController;
        include '../../../App/View/usuario/CadastrarUsuario.html.php';
    }
    public function usuarioStore(){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['confirmar_senha'];
        $usuario = new UsuarioController;
        
            $usuario->setNome($nome);
            $usuario->setCpf($cpf);
            $usuario->setTelefone($telefone);
            $usuario->setEndereco($endereco);
            $usuario->setEmail($email);
            $usuario->setSenha($senha);
            var_dump($usuario);
            $usuario->insert();
            header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');

    }
        
        // if($usuario->insert()){
        //     echo "categoria ". $nome. " inserido com sucesso";
            

    
    public function usuarioIndex(){
        $titulo = "Usuários Cadastradas";
        $usuario = new UsuarioController;
        require '../../View/usuario/usuario.html.php';
    }

    public function usuarioUpdate(){
        $titulo = "Atualizar usuario";
        $usuario = new UsuarioController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        include '../../View/usuario/AtualizarUsuario.html.php';
        
    }

    public function usuarioUpdateStore(){
        $titulo = "Atualizar usuario";
        $usuario = new UsuarioController;
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $usuario->setNome($nome);
        $usuario->setCpf($cpf);
        $usuario->setTelefone($telefone);
        $usuario->setEndereco($endereco);
        $usuario->setEmail($email);
        $usuario->update($id);
        header('Location: ../../../../App/Controller/Usuario/UsuarioIndex.php');
        
    }


}


$usuario = new UsuarioController;

