<?php
include '../../../App/View/base.php';
require_once '../../../App/Controller/Categoria/CategoriaController.php';

?>
    <div class="conteudoAutor">
      <div class="adicionarEPesquisar">
        <div class="botaoAdd">
          <a class="adicionarAutor" href="../../../App/Controller/Categoria/CategoriaCreate.php">Adicionar Categoria</a>
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
      $categoria->delete($id);
}
      ?>
      <div class="tabelaAutor">
        <hr />
        <table class="tabela" border="1">
          <thead>
            <tr>
              <td>ID</td>
              <td>Nome</td>
              <td>Setor</td>
              <td></td>
            </tr>
          </thead>

          <?php
          foreach ($categoria->findAll() as $key => $value) { ?>
          <tr>
            <td> <?php echo $value->idcategoria;?> </td> 
            <td> <?php echo $value->nome;?> </td> 
            <td> <?php echo $value->setor;?> </td>
            <td>
                <form method="post" action="../../../App/Controller/Categoria/CategoriaUpdate.php">
                        <input name="id" type="hidden" value="<?php echo $value->idcategoria;?>"/>                  
                        <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                        <input name="setor" type="hidden" value="<?php echo $value->setor;?>"/>
                        <button name="alterar" type="submit">Alterar</button>
                </form>
            <td> 
                <form method="post" >
                    <input name="id" type="hidden" value="<?php echo $value->idcategoria;?>"/>
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