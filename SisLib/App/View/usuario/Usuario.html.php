<?php
include '../../../App/View/base.php';
require_once '../../../App/Controller/Categoria/CategoriaController.php';

?>
    <div class="conteudoAutor">
      <div class="adicionarEPesquisar">
        <div class="botaoAdd">
          <a class="adicionarAutor" href="../../../App/Controller/Usuario/UsuarioCreate.php">Adicionar Usuário</a>
        </div>
        <div>
          <div id="divBusca">
            <input type="text" id="txtBusca" placeholder="Buscar..." /><img src="../../../App/View/img/icon seach.png" id="btnBusca" alt="Buscar" />
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['excluir'])){                                    
      $id = $_POST['id'];      
      $usuario->delete($id);
}
      ?>
      <div class="tabelaAutor">
        <hr />
        <table class="tabela" border="1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>CPF</td>
              <td>Telefone</td>
              <td></td>
            </tr>
          </thead>

          <?php
          foreach ($usuario->findAll() as $key => $value) { ?>
          <tr>
            <td> <?php echo $value->id;?> </td> 
            <td> <?php echo $value->nome;?> </td> 
            <td> <?php echo $value->cpf;?> </td> 
            <td> <?php echo $value->telefone;?> </td> 
            <td>
                <form method="post" action="../../../App/Controller/Usuario/UsuarioUpdate.php">
                        <input name="id" type="hidden" value="<?php echo $value->id;?>"/>                  
                        <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                        <input name="cpf" type="hidden" value="<?php echo $value->cpf;?>"/>
                        <input name="telefone" type="hidden" value="<?php echo $value->telefone;?>"/>
                        <input name="email" type="hidden" value="<?php echo $value->email;?>"/>
                        <input name="endereco" type="hidden" value="<?php echo $value->endereco;?>"/>


                        <button name="alterar" type="submit">Alterar</button>
                </form>
            <td> 
                <form method="post" >
                    <input name="id" type="hidden" value="<?php echo $value->id;?>"/>
                    <button name="excluir" type="submit" >Excluir</button>
                </form>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>